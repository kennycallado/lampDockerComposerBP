<?php

require_once "../vendor/autoload.php";

echo "$_ENV[ENVIRONMENT]";

/*
 * Test for twig. Remember create the index.html in src/templates/
 * mkdir templates/ && echo "<h1>hola mundo</h1><p>{{ '2019-08-07 23:00:00' | format_datetime(locale='es') }}</p>" > templates/index.html;
 *
 * use Twig\Loader\FilesystemLoader;
 * use Twig\Environment;
 * use Twig\Extra\Intl\IntlExtension;
 * 
 * $loader = new FilesystemLoader("../templates/");
 * $twig = new Environment($loader);
 * $twig->addExtension(new IntlExtension());
 * 
 * echo $twig->render("index.html");
 */

/*
 * Test for doctrine. Remember to create a entity directory
 * and create Agent.php and AgentRepository.php (content of
 * them next commented section)
 * 
 *
 * use Doctrine\ORM\Tools\Setup;
 * use Doctrine\ORM\EntityManager;
 * 
 * use App\Models\Agent;
 * 
 * $paths = array("app/Models/");
 * $isDevMode = true;
 * 
 * $dbParams = array(
 *   'host'     => 'mysql',
 *   'driver'   => 'pdo_mysql',
 *   'user'     => 'root',
 *   'password' => 'toor',
 *   'dbname'   => 'db_agent',
 * );
 * 
 * $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
 * $entityManager = EntityManager::create($dbParams, $config);
 * 
 * $agents = $entityManager->getRepository(Agent::class)->findAll();
 * 
 * var_dump($agents);
 *
 */

/* Agent.php */
//
// <?php
// namespace App\Models;
// use App\Models\AgentRepository;
// /**
//  * @Entity(repositoryClass=AgentRepository::class)
//  * @Table(name="t_agent")
//  */
// class Agent
// {
//   /**
//    * @Id
//    * @GeneratedValue
//    * @Column(type="integer")
//    */
//   private $agent_id;
//
//   /** @Column(type="string") */
//   private $agent_name;
//
//   /** @Column(type="string") */
//   private $password;
// }

/* AgentRepository.php */
//
// <?php
// namespace App\Models;
//
// use App\Models\Agent;
// use Doctrine\ORM\EntityRepository;
//
// class AgentRepository extends EntityRepository
// {}
