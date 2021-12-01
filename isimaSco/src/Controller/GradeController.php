<?php
namespace App\Controller;
use App\Entity\Grade;
use App\Entity\Groupe;
use App\Form\GradeType;
use App\Repository\GradeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GradeController extends AbstractController
{
 /**
 * @Route("/grade",name="allgradesLink")
 */
 public function allgrades(GradeRepository $gradeRepository): Response
 {
 return $this->render('grade/index.html.twig', [
 'grades' => $gradeRepository->findAll(),'title'=>'tous les
grades',
 ]);
 }
 /**
 * @Route("/addgrade",name="addgradeLink",methods={"GET","POST"})
 */
 public function addgrade(Request $request): Response
 {
 $grade= new Grade();
 $form=$this->createForm(GradeType::class, $grade);
 $form->handleRequest($request);
 if($form->isSubmitted() && $form->isValid()){
 $em=$this->getDoctrine()->getManager();
 $em->persist($grade);
 $em->flush();
 return $this->redirectToRoute("allgradesLink",[],response::HTTP_SEE_OTHER);
 }
 return $this->renderForm('grade/AddNewGrade.html.twig', [
 'grade' => $grade, 'form'=>$form,
 ]);
 }
 /**
 * @Route("/show/{id}", name="grade_show", methods={"GET"})
 */
 public function show(Grade $grade): Response
 {
    return $this->render('grade/show.html.twig', [
        'grade' => $grade,
        ]);
        }
        /**
        * @Route("/{id}/edit", name="grade_edit", methods={"GET","POST"})
        */
        public function edit(Request $request, Grade $grade): Response
        {
        $form = $this->createForm(GradeType::class, $grade);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('allgradesLink', [],
       Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('grade/edit.html.twig', [
        'grade' => $grade,
        'form' => $form,
        ]);
        }
        /**
        * @Route("/delete/{id}", name="grade_delete", methods={"GET","POST"})
        */
        public function delete(Request $request, Grade $grade): Response
        {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($grade);
        $entityManager->flush();
        return $this->redirectToRoute('allgradesLink', [],
       Response::HTTP_SEE_OTHER);
        }
       }