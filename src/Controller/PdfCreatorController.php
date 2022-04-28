<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PdfCreatorController extends AbstractController
{
    /**
     * @Route("/pdf/creator", name="app_pdf_creator")
     */
    public function index(EntityManager $entityManager): Response
    {
        require('./public/fPdf/fpdf.php');
        $amis = $entityManager
            ->getRepository(User::class)
            ->findAll();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        foreach ($amis as $ami){
            $pdf->Cell(40,10,$ami->getNom(),1,2,'C');
            $pdf->Ln();
        }

        $pdf->Output();

        return $this->render('pdf_creator/index.html.twig', [
            'controller_name' => 'PdfCreatorController',
        ]);
    }
}
