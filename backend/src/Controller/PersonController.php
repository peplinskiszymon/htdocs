<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    /**
     * @Route("/person", name="person")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $persons = $em->getRepository(Person::class)->findAll();

        return $this->render('person/index.html.twig', [
            'persons' => $persons,
        ]);
    }

    /**
     * @Route("/person_create", name="person_create")
     * @param Request $request
     * @return \Symfony\Component\httpFoundation\Response
     */
    public function CreatePerson(Request $request){


        $form = $this->createForm(PersonType::class);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $newPerson = new Person();

            try {
                $newPerson->setLogin($form->get('login')->getData());
                $newPerson->setLastName($form->get('last_name')->getData());
                $newPerson->setFirstName($form->get('first_name')->getData());
                $newPerson->setCreatedAt(new \DateTime());
                $newPerson->setUpdatedAt(new \DateTime());
                $newPerson->setGroup($form->get('group')->getData());

                $em->persist($newPerson);
                $em->flush();

                $this->addFlash('success','Person created');
            } catch (\Exception $e){
                $this->addFlash('error','Person not created');
            }

            
        }

        return $this->render('person/create.html.twig', [
            'form' => $form->createView()
        ]);
    }


        /**
     * @Route("person_update/{id}", name="person_update")
     *  @param int $id
     *  @param Request $request
     *  @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function person_update(int $id, Request $request){

        $form = $this->createForm(PersonType::class);

        $em = $this->getDoctrine()->getManager();
        $updateperson = $em->getRepository(Person::class)->find($id);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){

            try {

                $updateperson->setLogin($form->get('login')->getData());
                $updateperson->setLastName($form->get('last_name')->getData());
                $updateperson->setFirstName($form->get('first_name')->getData());
                $updateperson->setUpdatedAt(new \DateTime());
                $updateperson->setGroup($form->get('group')->getData());

                $em->persist($updateperson);
                $em->flush();

                $this->addFlash('success','Person update');
            } catch (\Exception $e){
                $this->addFlash('error','Person not updated');
            }
        }

        return $this->render('person/update.html.twig', [
            'form' => $form->createView(),
            'person' => $updateperson,
        ]);

    }


    /**
     * @Route("person_remove/{id}", name="person_remove")
     *  @param int $id
     *  @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function PersonRemove(int $id){

        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository(Person::class)->find($id);


        try{
            $em->remove($person);
            $em->flush();

            $this->addFlash('success','Person deleted');
        }catch(\Exception $e){
            $this->addFlash('error','Person not deleted');
        }

        return $this->redirectToRoute('person');
    }
}
