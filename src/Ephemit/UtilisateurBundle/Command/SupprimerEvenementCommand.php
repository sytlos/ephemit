<?php

namespace Ephemit\UtilisateurBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SupprimerEvenementCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('supprimer:evenement')
            ->setDescription('Supprimer un evenement depasse')
            ->addArgument('name', InputArgument::OPTIONAL, 'Qui voulez vous saluer??')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'Si définie, la tâche criera en majuscules')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
        $repoEvent = $this->getContainer()->get('doctrine')->getRepository('EphemitEvenementBundle:Evenement');
        $listEvent = $repoEvent->findAll();
        
        $today = new \DateTime('now');
        
        foreach($listEvent as $event){
            if($event->getDate() < $today){
                $entityManager->remove($event);
                $output->writeln('L\'evenement : '.$event->getNom().' a été supprimé.');
            }
        }
        
        $entityManager->flush();
        
        $output->writeln('Opération terminée');
        
    }
}
?>
