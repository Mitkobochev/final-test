<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\PromoCodes;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/admin/categories', name: 'app_admin_categories')]
    public  function getAllAdminCategories(SessionInterface $session, EntityManagerInterface $entityManager): Response {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $categoryRepository = $entityManager->getRepository(Categories::class);
        $category = $categoryRepository->findAll();
        $cat = $categoryRepository->findAll();

        return $this->render('admin_panel_categories.html', ['videos' => $category, 'categories' => $cat]);

    }

    #[Route('/admin/create-category')]
    public  function createCategory(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $categories = new Categories();
        $data = json_decode($request->getContent(), true);

        $categories->setCategory($data['category']);
        $categories->setSubcategory($data['subcategory']);
        $categories->setImageUrl($data['image_url']);
        $categories->setType($data['type']);

        $entityManager->persist($categories);
        $entityManager->flush();

        return $this->json(['message' => 'Category created successfully'], Response::HTTP_CREATED);
    }

    #[Route('/admin/category-delete/{id}', name: 'app_admin_delete_category')]
    public function deleteCategories($id, SessionInterface $session, EntityManagerInterface $entityManager): Response {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $category = $entityManager->getRepository(Categories::class)->find($id);

        if (!$category) {
            return new JsonResponse('Category not found', Response::HTTP_NOT_FOUND);
        }

        $entityManager->remove($category);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Category deleted successfully']);
    }
    #[Route('/admin/category-update/{id}', name: 'app_admin_update_category', methods: ['PUT'])]
    public function updateCategory($id, Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response {
        // Retrieve user ID and role from the session
        $userId = $session->get('user_id');

        $user = $entityManager->getRepository(Users::class)->find($userId);
        $userRole = $user->getUserRole();
        // Check if the user is authenticated and has the super admin role
        if (!$userId || $userRole !== 'superadmin') {
            return $this->render('404.html');
        }

        $categoriesRepository = $entityManager->getRepository(Categories::class);
        $categories = $categoriesRepository->find($id);
        $data = json_decode($request->getContent(), true);
        if (!$categories) {
            return $this->json(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }

        if (isset($data['category'])) {
            $categories->setCategory($data['category']);
        }

        if (isset($data['subcategory'])) {
            $categories->setSubcategory($data['subcategory']);
        }

        if (isset($data['image_url'])) {
            $categories->setImageUrl($data['image_url']);
        }

        if (isset($data['type'])){
            $categories->setType($data['type']);
        }

        $entityManager->flush();

        return $this->json(['message' => 'Category updated successfully'], Response::HTTP_OK);
    }

}