<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Users;
use App\Entity\VideoStorage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LessonController extends AbstractController
{
    #[Route('/video/{id}', name: 'app_video_id')]
    public function getVideoById(SessionInterface $session, EntityManagerInterface $entityManager, $id) {

        $value = $id;
        $videoRepository = $entityManager->getRepository(VideoStorage::class);
        $video = $videoRepository->findOneBy([
            'id' => $value,
        ]);

        $videoUrl = $video->getVideoUrl();
        $category = $video->getCategory();

        $userId = $session->get('user_id');
        if (!$userId) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        // Load the user based on user_id (assuming your User class/entity is used)
        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($userId);

        // Check user's role and subscription status
        $userRole = $user->getUserRole();
        $subscriptionEnd = $user->getSubscriptionEnd();

        $today = new \DateTime(); // Current date and time

        // Check if user role and category match the conditions
        $allowedRolesAndCategories = [
            'Οικονομικά (ΑΟΘ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Πληροφορική (ΑΕΠΠ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Μαθηματικά' => ['Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'Basic (Μαθηματικά)', 'superadmin'],
        ];

        if (!array_key_exists($category, $allowedRolesAndCategories)) {
            // Invalid category, render a page indicating the user does not have access
            return $this->render('change_subscription.html');
        }

        if (!in_array($userRole, $allowedRolesAndCategories[$category]) || $subscriptionEnd <= $today) {
            // User role or subscription is not allowed, render a page indicating the user does not have access
            return $this->render('change_subscription.html');
        }

        // Check if the video exists
        if (!$video) {
            // Render a page indicating that the video was not found
            return $this->render('video_not_found.html');
        }
        $relatedVideos = $videoRepository->findBy(['text' => $video->getText(), 'category' => $video->getCategory()], ['id' => 'DESC'], 5);

        return $this->render('course-video.html', ['video' => $video, 'url' => $videoUrl , 'relatedVideos' => $relatedVideos]);

    }
    #[Route('/videos/{id}/{category}', name: 'app_video_lessons')]
    public function lessons(SessionInterface $session, EntityManagerInterface $entityManager, $id, $category)
    {
        $userId = $session->get('user_id');
        if (!$userId) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        // Load the user based on user_id (assuming your User class/entity is used)
        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($userId);

        // Check user's role and subscription status
        $userRole = $user->getUserRole();
        $subscriptionEnd = $user->getSubscriptionEnd();

        $today = new \DateTime(); // Current date and time

        // Check if user role and category match the conditions
        $allowedRolesAndCategories = [
            'Οικονομικά (ΑΟΘ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Πληροφορική (ΑΕΠΠ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Μαθηματικά' => ['Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'Basic (Μαθηματικά)', 'superadmin'],
        ];

        if (!array_key_exists($category, $allowedRolesAndCategories)) {
            // Invalid category, render a page indicating the user does not have access
            return $this->render('change_subscription.html.html');
        }

        if (!in_array($userRole, $allowedRolesAndCategories[$category]) || $subscriptionEnd <= $today) {
            // User role or subscription is not allowed, render a page indicating the user does not have access
            return $this->render('change_subscription.html.html');
        }


        $value = $id;
        // Fetch the video from the database based on the video_id
        $videoRepository = $entityManager->getRepository(VideoStorage::class);
        $video = $videoRepository->findBy([
            'text' => $value,
            'category' => $category
        ]);
        // Check if the video exists
        if (!$video) {
            // Render a page indicating that the video was not found
            return $this->render('video_not_found.html');
        }


        // Render the course details page and pass the video data and related videos
        return $this->render('course-details.html', ['videos' => $video, 'url' => null , 'relatedVideos' => null]);
    }

    #[Route('/videos-category/{category}', name: 'app_video_category')]
    public function lessonsByCategory(SessionInterface $session, EntityManagerInterface $entityManager, string $category = null)
    {
        $userId = $session->get('user_id');
        if (!$userId) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        // Load the user based on user_id (assuming your User class/entity is used)
        $userRepository = $entityManager->getRepository(Users::class);
        $user = $userRepository->find($userId);

        // Check user's role and subscription status
        $userRole = $user->getUserRole();
        $subscriptionEnd = $user->getSubscriptionEnd();

        $today = new \DateTime(); // Current date and time

        // Check if user role and category match the conditions
        $allowedRolesAndCategories = [
            'Οικονομικά (ΑΟΘ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Πληροφορική (ΑΕΠΠ)' => ['Pro (ΑΕΠΠ + ΑΟΘ)', 'Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'superadmin'],
            'Μαθηματικά' => ['Exclussive (ΑΕΠΠ + ΑΟΘ + Μαθηματικά)', 'Basic (Μαθηματικά)', 'superadmin'],
        ];

        if (!array_key_exists($category, $allowedRolesAndCategories)) {
            // Invalid category, render a page indicating the user does not have access
            return $this->render('change_subscription.html');
        }

        if (!in_array($userRole, $allowedRolesAndCategories[$category]) || $subscriptionEnd <= $today) {
            // User role or subscription is not allowed, render a page indicating the user does not have access
            return $this->render('change_subscription.html');
        }

        // Fetch the videos from  the database based on the category (if provided)
        $videoRepository = $entityManager->getRepository(VideoStorage::class);
        $categoryRepository = $entityManager->getRepository(Categories::class);
        if ($category !== null) {
            $videos = $videoRepository->findBy(['category' => $category]);
            $cat = $categoryRepository->findBy(['category' => $category]);
        } else {
            $videos = $videoRepository->findAll();
            $cat = $videoRepository->findAll();
        }

        // Get the list of available categories
        $categories = $videoRepository->findAll();

        // Render the video listing page and pass the videos data
        return $this->render('course-grid.html', ['videos' => $videos, 'categories' => $categories, 'endpoint'=> $category,
            'all_cat' => $cat ]);
    }


    #[Route('/edit-video/{id}/edit', name: 'app_edit_video', methods: ['PUT'])]
    public function edit_video($id, Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $videosa = $entityManager->getRepository(VideoStorage::class);
        $video = $videosa->find($id);
        if (!$video) {
            return new JsonResponse('Video not found', Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        if (isset($data['title'])) {
            $video->setTitle($data['title']);
        }
        if (isset($data['category'])) {
            $video->setCategory($data['category']);
        }
        if (isset($data['video_url'])) {
            $video->setVideoUrl($data['video_url']);
        }
        if (isset($data['image_url'])) {
            $video->setImageUrl($data['image_url']);
        }
        if (isset($data['description'])) {
            $video->setDescription($data['description']);
        }
        if (isset($data['text'])) {
            $video->setText($data['text']);
        }


        $entityManager->flush();

        return new JsonResponse(['message' => 'Video updated successfully']);
    }

    #[Route('/admin-video/create', name: 'app_create_video', methods: ['POST'])]
    public function createVideo(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $data = json_decode($request->getContent(), true);

        $video = new VideoStorage(); // Adjust this to match your entity
        $video->setTitle($data['title']);
        $video->setCategory($data['category']);
        $video->setDescription($data['description']);
        $video->setVideoUrl($data['video_url']);
        $video->setImageUrl($data['image_url']);
        $video->setText($data['text']);

        $entityManager->persist($video);
        $entityManager->flush();

        return $this->json(['message' => 'Video created successfully'], Response::HTTP_CREATED);
    }


    #[Route('/delete-video/{id}', name: 'app_delete_video')]
    public function deleteVideo($id, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $video = $entityManager->getRepository(VideoStorage::class)->find($id);

        if (!$video) {
            return new JsonResponse('Video not found', Response::HTTP_NOT_FOUND);
        }

        $entityManager->remove($video);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Video deleted successfully']);
    }

    #[Route('/admin-panel/{category}', name: 'app_video_admin')]
    public function videosByCategory(SessionInterface $session, EntityManagerInterface $entityManager, string $category = null)
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        // Fetch the videos from the database based on the category (if provided)
        $videoRepository = $entityManager->getRepository(VideoStorage::class);
        $categories = $videoRepository->findAll(); // Assuming you have a method to fetch all unique categories

        if ($category !== null) {
            $videos = $videoRepository->findBy(['category' => $category]);
        } else {
            // Fetch all videos
            $videos = $videoRepository->findAll();
        }


        // Render the admin panel page and pass the videos data and categories
        return $this->render('admin_panel_videos.html', ['videos' => $videos, 'categories' => $categories]);
    }


}