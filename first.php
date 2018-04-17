<?php

// Autoload das classes.
require_once 'vendor/autoload.php';

// Usando a classe PhpWord.
use PhpOffice\PhpWord\IOFactory;
// Usando a classe IOFactory.
use PhpOffice\PhpWord\PhpWord;

// Instanciando um objeto PhpWord.
$phpWord = new PhpWord();

// Inserindo uma nova sessão no documento.
$section = $phpWord->addSection();
// Inserindo um texto mussum ipsum ao documento.
$section->addText('Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Admodum accumsan
    disputationi eu sit. Vide electram sadipscing et per. Em pé sem cair, deitado sem dormir, sentado sem cochilar
    e fazendo pose. Aenean aliquam molestie leo, vitae iaculis nisl.');

// Definindo o tipo de documento a ser escrito.
$objWriter = IOFactory::createWriter($phpWord, 'Word2007');
// Salvando o documento no tipo escolhido.
$objWriter->save('first.docx');
