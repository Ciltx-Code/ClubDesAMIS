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
        $fpdf->SetFont('Arial', 'B', 16);

        // Logo
        $fpdf->Image('image.jpg', 10, 6, 30);
        // Arial bold 15
        $fpdf->SetFont('Arial', 'B', 15);
        // Move to the right
        $fpdf->Cell(71);
        // Title
        $fpdf->Cell(50, 10, 'Liste des AMIS', 1, 0, 'C');
        // Line break
        $fpdf->Ln(25);

        $header = array(iconv("UTF-8", "windows-1252", 'NOM'), iconv("UTF-8", "windows-1252", 'PRÉNOM'),);
        // Header
        $fpdf->SetFont('Arial', 'B', 20);
        foreach ($header as $col){
            $fpdf->Cell(95, 12, $col, 1,0,"C");
        }
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 15);
        foreach ($amis as $row) {
            $fpdf->Cell(95, 8, iconv("UTF-8", "windows-1252", $row->getNom()), 1,0,"C");
            $fpdf->Cell(95, 8, iconv("UTF-8", "windows-1252", $row->getPrenom()), 1,0,"C");
            $fpdf->Ln();
        }


        $fpdf->Output('D',"LISTE_AMIS.pdf", true);

        $response = $this->render("pdf_creator/index.html.twig",
            array(
                'pdf' => $fpdf,
                'controller_name' => 'pdf'
            ));

        $response->headers->set('Content-type', 'application/pdf');
        return $response;
    }

}
