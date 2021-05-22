<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        $cant= 1;

        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->setEmail(sprintf('admin%d@admin.com', $cant));
            $user->setFirstName('admin '.$cant);
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'admin'));
            $user->setRoles(['ROLE_ADMIN']);
            $manager->persist($user);
            $cant++;
        }

        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->setEmail(sprintf('user%d@user.com', $cant));
            $user->setFirstName('user '.$cant);
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'user'));
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $cant++;
        }

        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->setEmail(sprintf('soporte%d@soporte.com', $cant));
            $user->setFirstName('Tecnico Soporte'.$cant);
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'tecnico'));
            $user->setRoles(['ROLE_SOPORTE']);
            $manager->persist($user);
            $cant++;
        }


        $manager->flush();

    }
}
