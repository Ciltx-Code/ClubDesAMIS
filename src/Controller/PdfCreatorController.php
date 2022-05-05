<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Fpdf\Fpdf;


class PdfCreatorController extends AbstractController
{
    /**
     * @Route("/pdf/creator", name="app_pdf_creator")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {

        $amis = $entityManager
            ->getRepository(User::class)
            ->findAll();
        $fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Arial','B',16);
        foreach ($amis as $ami){
            $fpdf->Cell(40,10,$ami->getNom(),1,2,'C');
            $fpdf->Ln();
        }
        $fpdf->Output('D');

        $response = $this->render("pdf_creator/index.html.twig",
            array(
                'pdf'=>$fpdf,
                'controller_name'=>'mkengiuh'
            ));

        $response->headers->set('Content-type', 'application/pdf');
        return $response;
    }
}
