<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function homepage(): Response {

        return $this->render('index.html');
    }
    #[Route('/404', name: 'app_404')]
    public function pageNotFound(): Response {

        return $this->render('404.html');
    }


    #[Route('/account/forgot-password', name: 'app_user_forgot_password')]
    public function forgotPassword(Request $request, EntityManagerInterface $entityManager): Response
    {
        $success = false; // Initialize the success variable as false
        $error = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');

            // Find the user by email
            $userRepository = $entityManager->getRepository(Users::class); // Replace with your actual User entity class
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                // Generate a new password
                $newPassword = bin2hex(random_bytes(8)); // Generate an 8-character random password

                // Hash the new password (not recommended to hash passwords this way, use bcrypt or similar)
                $hashedPassword = sha1($newPassword); // Example hashing, not secure

                $user->setPassword($hashedPassword);

                // Update the user's password in the database
                $entityManager->flush();

                // Send the new password to the user's email
                $emailContent = "Hello " . $user->getUsername() . ",\n\n";
                $emailContent .= "You have requested a password change. Here is your new password: " . $hashedPassword . ".\n";
                $emailContent .= "Please note that your new password is hashed for security reasons. You can change it in the 'Change Password' section of your account settings.\n\n";
                $emailContent .= "Best regards,\nPanellhnies support";
                $transport = Transport::fromDsn('smtp://alexander.kominis@gmail.com:twqoyitupnxhoukr@smtp.gmail.com:587');
                $mailer = new Mailer($transport);

                $email = (new Email())
                    ->from('noreply@example.com')
                    ->to($email)
                    ->subject('Password Reset')
                    ->text($emailContent);

                $mailer->send($email);

                $success = 'Email has been sned';
                // Redirect to login page or show a success message
            } else {
                $error = 'No user with that email found.';
            }
        }

        return $this->render('forgot_password.html', [
            'success' => $success,
            'error' => isset($error) ? $error : null,
        ]);
    }

    #[Route('/account/login', name: 'app_user_login')]
    public function login(Request $request, EntityManagerInterface $entityManager)
    {
        if ($request->isMethod('POST')) {
            $emailOrUsername = $request->request->get('username_email');
            $password = $request->request->get('password');

            // Find the user by email or username
            $userRepository = $entityManager->getRepository(Users::class);
            $user = $userRepository->findOneBy(['email' => $emailOrUsername]);
            if (!$user) {
                // User not found by email, try finding by username
                $user = $userRepository->findOneBy(['username' => $emailOrUsername]);
            }
            if ($user) {
                // Verify the password
                if ($password === $user->getPassword()) {
                    $session = $request->getSession();
                    $session->set('user_id', $user->getId());

                    // Redirect the user to another page after successful login
                    return $this->redirectToRoute('app_my_profile');
                }
            }


        }
        $errorMessage = 'Invalid email/username or password.';
        // Pass the error message to the template
        return $this->render('login.html', [
            'error' => $errorMessage,
        ]);
    }

    #[Route('/account/logout', name: 'app_logout')]
    public function logout(SessionInterface $session)
    {
        // Clear the session data
        $session->clear();

        // You can redirect the user to the login page or any other desired page
        // For example, using Symfony's redirect:
        return $this->redirectToRoute('app_home_page');
    }

    #[Route('/account/register', name: 'app_user_register')]
    public function register(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $error = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $username = $request->request->get('username');
            $password = $request->request->get('password');

            // Check if the email or username already exists in the database
            $existingUserByEmail = $entityManager->getRepository(Users::class)->findOneBy(['email' => $email]);
            if ($existingUserByEmail) {
                $error = 'Email already exists';
            }

            $existingUserByUsername = $entityManager->getRepository(Users::class)->findOneBy(['username' => $username]);
            if ($existingUserByUsername) {
                $error = 'Username already exists';
            }

            if (!$existingUserByEmail && !$existingUserByUsername) {
                // Create a new user
                $users = new Users();
                $users->setEmail($email);
                $users->setUsername($username);
                $users->setPassword($password);
                $users->setUserRole('guest');

                $entityManager->persist($users);
                $entityManager->flush();

                if ($users->getId()) {
                    $session->set('user_id', $users->getId());

                    // Redirect to the desired page after successful registration
                    return $this->redirectToRoute('app_my_profile');
                } else {
                    // Redirect to an error page if an error occurred during registration
                    return $this->redirectToRoute('app_user_404');
                }
            }
        }

        return $this->render('reigstrations.html', [
            'error' => $error,
        ]);
    }



    #[Route('/account/my-profile', name: ('app_my_profile'))]
    public function myProfile(SessionInterface $session): Response{
        if (!$session->get('user_id')) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        return $this->render('my-profile.html');
    }


    #[Route('/account/general', name: 'app_user_general')]
    public function general(Request $request, EntityManagerInterface $entityManager)
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->json([
                'error' => 'User not logged in.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($userId);
        if (!$user) {
            return $this->json([
                'error' => 'User not found.',
            ], Response::HTTP_NOT_FOUND);
        }
        $subscriptionEnd = $user->getSubscriptionEnd();
        if ($subscriptionEnd){
        $formattedSubscriptionEnd = $subscriptionEnd->format('Y-m-d');} // Format the date as 'YYYY-MM-DD'
        else {
            $formattedSubscriptionEnd = 'There is no available subscription yet';
        }
        return $this->json([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'role' => $user->getUserRole(),
            'subscription' => $formattedSubscriptionEnd,
            'hashedPassword' => $user->getPassword(),
        ]);
    }

    #[Route('/account/change-password', name: 'app_user_change_password')]
    public function changePassword(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): JsonResponse
    {
        // Retrieve the user identifier from the session
        $userId = $session->get('user_id');

        if (!$userId) {
            // User is not authenticated, handle the situation accordingly
            // For example, redirect to login page or show an error message
        }

        // Retrieve the user object using the user identifier
        $user = $entityManager->getRepository(Users::class)->find($userId);

        if (!$user) {
            return $this->render('404.html');
        }

        // Access the submitted password values from the request
        $oldPassword = $request->request->get('old-password');
        $newPassword = $request->request->get('new-password');
        $confirmPassword = $request->request->get('confirm-password');

        // Get the hashed password stored in the database
        $hashedPassword = $user->getPassword();

        if ($oldPassword !== $hashedPassword) {
            // Display an alert message using JavaScript
            return new JsonResponse(['message' => 'Old password is incorrect.'], 400);
        }

        // Check if the new password is non-empty
        if (!empty($newPassword)) {
            // Set the new password directly without hashing
            $user->setPassword($newPassword);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        // Password changed successfully, return success response
        return new JsonResponse(['message' => 'Password changed successfully.']);
    }

    #[Route('/contact', name: 'app_contact_us')]
    public function contactUs(Request $request, MailerInterface $mailer): Response {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $emailAddress = $request->request->get('email');
            $phone = $request->request->get('phone');
            $subject = $request->request->get('subject');
            $message = $request->request->get('message');
            $checkbox1 = $request->request->get('checkbox1');
            $checkbox2 = $request->request->get('checkbox2');
            $checkbox3 = $request->request->get('checkbox3');
            $checkbox4 = $request->request->get('checkbox4');

            // Compose the email content
            $emailContent = "<p>Hello Panelhnies admin,</p>";
            $emailContent .= "<p>You have received the following information:</p>";
            $emailContent .= "<p><strong>Name:</strong> " . $name . "</p>";
            $emailContent .= "<p><strong>Email:</strong> " . $emailAddress . "</p>";
            $emailContent .= "<p><strong>Phone:</strong> " . $phone . "</p>";
            $emailContent .= "<p><strong>Subject:</strong> " . $subject . "</p>";
            $emailContent .= "<p><strong>Message:</strong> " . $message . "</p>";
            $emailContent .= "<p><strong>Selected Options:</strong></p>";
            if ($checkbox1) {
                $emailContent .= "<p>ΑΕΠΠ (Πληροφορική)</p>";
            }
            if ($checkbox2) {
                $emailContent .= "<p>ΑΟΘ (Οικονομικά)</p>";
            }
            if ($checkbox3) {
                $emailContent .= "<p>Έκθεση (+ Λογοτεχνία)</p>";
            }
            if ($checkbox4) {
                $emailContent .= "<p>Μαθηματικά</p>";
            }

            $transport = Transport::fromDsn('smtp://alexander.kominis@gmail.com:twqoyitupnxhoukr@smtp.gmail.com:587');
            $mailer = new Mailer($transport);

            // Compose the email
            $email = (new Email())
                ->from($emailAddress)
                ->to('alexander.kominis@gmail.com')
                ->subject($subject)
                ->html($emailContent);

            // Send the email
            $mailer->send($email);

        }

        return $this->render('contact.html');
    }

    #[Route('/become-teacher', name: 'app_teacher')]
    public function becomeTeacher(Request $request, MailerInterface $mailer): Response {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $emailAddress = $request->request->get('email');
            $phone = $request->request->get('phone');
            $workingExperience = $request->request->get('working_experience');
            $referralSource = $request->request->get('referral_source');
            $cvFile = $request->files->get('cv');
            $message = $request->request->get('message');

            // Compose the email content
            $emailContent = "<p>Hello Panelhnies admin,</p>";
            $emailContent .= "<p>You have received a teacher application:</p>";
            $emailContent .= "<p><strong>Name:</strong> " . $name . "</p>";
            $emailContent .= "<p><strong>Email:</strong> " . $emailAddress . "</p>";
            $emailContent .= "<p><strong>Phone:</strong> " . $phone . "</p>";
            $emailContent .= "<p><strong>Working Experience:</strong> " . $workingExperience . "</p>";
            $emailContent .= "<p><strong>Referral Source:</strong> " . $referralSource . "</p>";
            $emailContent .= "<p><strong>Message:</strong> " . $message . "</p>";


            $transport = Transport::fromDsn('smtp://alexander.kominis@gmail.com:twqoyitupnxhoukr@smtp.gmail.com:587');
            $mailer = new Mailer($transport);

            // Compose the email
            $email = (new Email())
                ->from($emailAddress)
                ->to('alexander.kominis@gmail.com')
                ->subject('Teacher Application')
                ->html($emailContent);

            if ($cvFile) {
                $email->attachFromPath($cvFile->getRealPath(), $cvFile->getClientOriginalName());
            }

            // Send the email
            $mailer->send($email);

            // Show a success message to the user
            return $this->render('teacher_cv.html', ['success' => true]);
        }

        return $this->render('teacher_cv.html');
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    public function getUsers(SessionInterface $session, EntityManagerInterface $entityManager): Response {

        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $userRepository = $entityManager->getRepository(Users::class);
        $users = $userRepository->findAll();

        $userArray = [];
        foreach ($users as $user) {
            $subscriptionEnd = $user->getSubscriptionEnd();
            $subscriptionEndFormatted = $subscriptionEnd ? $subscriptionEnd->format('m-d-Y') : '';

            $userArray[] = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'role' => $user->getUserRole(),
                'subscription' => $subscriptionEndFormatted,
            ];
        }

        return $this->render('admin_panel.html', [
            'users' => $userArray, // Use the formatted array for rendering
            'userEntities' => $users, // Pass the original entities if needed for other operations
        ]);
    }

    #[Route('/admin/users/{id}', name: 'app_admin_edit_user')]
    public function editUser(SessionInterface $session, Request $request, EntityManagerInterface $entityManager, int $id): JsonResponse
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        // Find the user by ID
        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }
        $data = json_decode($request->getContent(), true);

        $user->setUsername($data['username']);
        $user->setEmail($data['email']);
        $user->setUserRole($data['role']);

        // Assuming $data['subscription'] is in 'Y-m-d' format
        $subscriptionEnd = \DateTime::createFromFormat('Y-m-d', $data['subscription']);
        if ($subscriptionEnd) {
            $user->setSubscriptionEnd($subscriptionEnd);
        } else {
            // Handle invalid date format
            return new JsonResponse(['error' => 'Invalid subscription date format.'], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->flush();

        return new JsonResponse(['message' => 'User updated successfully.']);
    }


    #[Route('/admin/users/{id}/delete', name: 'app_admin_delete_user')]
    public function deleteUser(SessionInterface $session, EntityManagerInterface $entityManager, int $id): JsonResponse
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return new JsonResponse(['message' => 'User deleted successfully.']);
    }

    #[Route('/admin/users/create/new', name: 'app_admin_create_user')]
    public function createUser(SessionInterface $session, Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');
        $userRole = $session->get('user_role');

        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'ROLE_SUPER_ADMIN') {
            return new JsonResponse(['error' => 'Access denied.'], Response::HTTP_FORBIDDEN);
        }

        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');
        $data = json_decode($request->getContent(), true);
        $newUser = new Users();
        $newUser->setUsername($data['username']);
        $newUser->setEmail($data['email']);
        $newUser->setPassword($data['password']);
        $newUser->setUserRole($data['role']);
        $subscriptionEnd = \DateTime::createFromFormat('Y-m-d', $data['subscription']);
        if ($subscriptionEnd) {
            $newUser->setSubscriptionEnd($subscriptionEnd);
        } else {
            // Handle invalid date format
            return new JsonResponse(['error' => 'Invalid subscription date format.'], Response::HTTP_BAD_REQUEST);
        }
        $entityManager->persist($newUser);
        $entityManager->flush();

        return new JsonResponse(['message' => 'User created successfully.']);
    }


}