<?php

namespace Ephemit\UtilisateurBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SupprimerUtilisateurCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('supprimer:utilisateur')
            ->setDescription('Supprimer un utilisateur inactif')
            ->addArgument('name', InputArgument::OPTIONAL, 'Qui voulez vous saluer??')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'Si définie, la tâche criera en majuscules')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
        $repoUser = $this->getContainer()->get('doctrine')->getRepository('EphemitUtilisateurBundle:Utilisateur');
        $listUser = $repoUser->findAll();
        
        $aweekago = new \DateTime('-7 days');
        
        foreach($listUser as $user){
            if($user->getLastLogin() < $aweekago){
                $entityManager->remove($user);
                $output->writeln('L\'utilisateur : '.$user->getUsername().' a été supprimé.');
            }
        }
        
        $entityManager->flush();
        
        $output->writeln('Opération terminée');
        
    }
}
?>
