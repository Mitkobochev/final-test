<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\ExerciseStorage;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ExerciseController extends AbstractController
{
    #[Route('/exercise-category/{category}', name: 'app_exercise_category')]
    public function lessonsByCategory(SessionInterface $session, EntityManagerInterface $entityManager, string $category = null)
    {
        // Check if the user is logged in
        if (!$session->get('user_id')) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        // Fetch the videos from  the database based on the category (if provided)
        $exerciseRepository = $entityManager->getRepository(ExerciseStorage::class);
        $categoryRepository = $entityManager->getRepository(Categories::class);

        if ($category !== null) {
            $exercises = $exerciseRepository->findBy(['category' => $category]);
            $cat = $categoryRepository->findBy(['category' => $category]);
        } else {
            $exercises = $exerciseRepository->findAll();
            $cat = $categoryRepository->findAll();

        }

        // Get the list of available categories
        $categories = $exerciseRepository->findAll();


        // Render the video listing page and pass the videos data
        return $this->render('course-exercise.html', ['exercises' => $exercises, 'categories' => $categories, 'endpoint'=> $category, 'all_cat' => $cat]);
    }

    #[Route('/exercises/{category}/{subcategory}', name:'app_exercise_page')]
    public  function getThemes(SessionInterface $session, EntityManagerInterface $entityManager, $category, $subcategory) {
        // Check if the user is logged in
        if (!$session->get('user_id')) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        $exerciseRepository = $entityManager->getRepository(ExerciseStorage::class);
        $exercises = $exerciseRepository->findBy([
            'category' => $category,
            'subcategory'=>$subcategory
        ]);

        if (!$exercises) {
            // Render a page indicating that the video was not found
            return $this->render('video_not_found.html');
        }

        return $this->render('exercise-list.html', ['exercises' => $exercises, 'url' => null , 'relatedVideos' => null]);
    }

    #[Route('/exercises/{id}', name:'app_exercise_view')]
    public function openExercisePage(SessionInterface $session, EntityManagerInterface $entityManager, $id) {
        if (!$session->get('user_id')) {
            // Render the session error page
            return $this->render('session_expire.html');
        }

        $exerciseRepository = $entityManager->getRepository(ExerciseStorage::class);
        $video = $exerciseRepository->findOneBy([
            'id' => $id,
        ]);
        $exerciseUrl = $video->getFilePath();

        return $this->render('exercise-panel.html', ['video' => $video, 'url' => $exerciseUrl , 'relatedVideos' => null]);

    }


    #[Route('/admin-panel/exercise/{category}', name: 'app_exercise_admin')]
    public function exercisesByCategory(SessionInterface $session, EntityManagerInterface $entityManager, string $category = null)
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        // Fetch the exercises from the database based on the category (if provided)
        $exerciseRepository = $entityManager->getRepository(ExerciseStorage::class);
        $categories = $exerciseRepository->findAll(); // Assuming you have a method to fetch all unique categories

        if ($category !== null) {
            $exercises = $exerciseRepository->findBy(['category' => $category]);
        } else {
            // Fetch all exercises
            $exercises = $exerciseRepository->findAll();
        }

        // Render the admin panel page and pass the exercises data and categories
        return $this->render('admin_panel_exercise.html', ['exercises' => $exercises, 'categories' => $categories]);
    }
    #[Route('/admin/exercise/create', name: 'app_create_exercise', methods: ['POST'])]
    public function createExercise(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
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

        $exercise = new ExerciseStorage();

        $exercise->setTitle($data['title']);
        $exercise->setCategory($data['category']);
        $exercise->setSubcategory($data['subcategory']);
        $exercise->setDescription($data['description']);
        $exercise->setFilePath($data['file_url']);
        $exercise->setImageUrl($data['image_url']);

        $entityManager->persist($exercise);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Exercise added successfully.'], Response::HTTP_CREATED);
    }

    #[Route('/edit-exercise/{id}/edit', name: 'app_edit_exercise')]
    public function editExercise($id, Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $exerciseStore = $entityManager->getRepository(ExerciseStorage::class);
        $exercise = $exerciseStore->find($id);
        $data = json_decode($request->getContent(), true);

        if (isset($data['title'])) {
            $exercise->setTitle($data['title']);
        }

        if (isset($data['category'])) {
            $exercise->setCategory($data['category']);
        }

        if (isset($data['subcategory'])) {
            $exercise->setSubcategory($data['subcategory']);
        }

        if (isset($data['description'])) {
            $exercise->setDescription($data['description']);
        }

        if (isset($data['file_path'])) {
            $exercise->setFilePath($data['file_path']);
        }

        if (isset($data['image_url'])) {
            $exercise->setImageUrl($data['image_url']);
        }

        if (isset($data['is_locked'])) {
            $exercise->setIsLocked($data['is_locked']);
        }

        $entityManager->flush();

        return new JsonResponse(['message' => 'Exercise updated successfully.'], Response::HTTP_OK);
    }


    #[Route('/admin-panel/exercise/delete/{id}', name: 'app_delete_exercise', methods: ['DELETE'])]
    public function deleteExercise(EntityManagerInterface $entityManager, ExerciseStorage $exercise, SessionInterface $session): Response
    {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $entityManager->remove($exercise);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Exercise deleted successfully.'], Response::HTTP_OK);
    }


}