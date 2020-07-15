<?php

namespace App\Controller;

use App\Entity\Group;
use App\Form\GroupType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupController extends AbstractController
{
    /**
     * @Route("/group", name="group")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $groups = $em->getRepository(Group::class)->findAll();

        return $this->render('group/index.html.twig', [
            'groups' => $groups,
        ]);
    }

    /**
     * @Route("/group_create", name="group_create")
     * @param Request $request
     * @return \Symfony\Component\httpFoundation\Response
     */

    public function group_create(Request $request)
    {
        $form = $this->createForm(GroupType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $newGroup = new Group;

            try {

                $newGroup->setName($form->get('name')->getData());
                $newGroup->setInfo($form->get('info')->getData());
                $newGroup->setCreatedAt(new \DateTime());
                $newGroup->setUpdatedAt(new \DateTime());

                $em->persist($newGroup);
                $em->flush();

                $this->addFlash('success','Group created');
            } catch (\Exception $e){
                $this->addFlash('error','Group not created');
            }

        }

        return $this->render('group/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("group_update/{id}", name="group_update")
     *  @param int $id
     *  @param Request $request
     *  @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function group_update(int $id, Request $request){

        
        $em = $this->getDoctrine()->getManager();
        $updateGroup = $em->getRepository(Group::class)->find($id);

        $form = $this->createForm(GroupType::class, $updateGroup);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            try{

                $updateGroup->setName($form->get('name')->getData());
                $updateGroup->setInfo($form->get('info')->getData());
                $updateGroup->setUpdatedAt(new \DateTime());

                $em->persist($updateGroup);
                $em->flush();

                $this->addFlash('success', 'Group updated');
            }catch(\Exception $e){
                $this->addFlash('error', 'Group not updated');
            }
        }

        return $this->render('group/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("group_remove/{id}", name="group_remove")
    *  @param int $id
    *  @return \Symfony\Component\HttpFoundation\RedirectResponse
    */

    public function groupRemove (int $id){

        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository(Group::class)->find($id);

        try{

            $em->remove($group);
            $em->flush();

            $this->addFlash('success','Group deleted');
        } catch (\Exception $e){
            $this->addFlash('error','Group not deleted');
        }

        return $this->redirectToRoute('group');
    }
}
