<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset ($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
        if ($name === 'debug_kit') {
            $error = 'Try adding your current <b>top level domain</b> to the
                <a href="https://book.cakephp.org/debugkit/4/en/index.html#configuration" target="_blank">DebugKit.safeTld</a>
            config and reload.';
            if (!in_array('sqlite', \PDO::getAvailableDrivers())) {
                $error .= '<br />You need to install the PHP extension <code>pdo_sqlite</code> so DebugKit can work properly.';
            }
        }
    }

    return compact('connected', 'error');
};

// if (!Configure::read('debug')):
//     throw new NotFoundException(
//         'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
//     );
// endif;

?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Welcome to Royal Britannia University
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'home', 'bootstrap.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <img alt="Logo" src="<?= $this->Url->webroot('img/university_logo-removebg-preview.png') ?>" width="300" />
            <h2>
                The Largest College of Technology for Dummies
            </h2>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="message default text-center">
                            <small class="flash-message">Select one of the features below</small>
                        </div>
                        <div id="url-rewriting-warning"
                            style="padding: 1rem; background: #fcebea; color: #cc1f1a; border-color: #ef5753;">
                            <ul>
                                <li class="bullet problem">
                                    URL rewriting is not properly configured on your server.<br />
                                    1) <a target="_blank" rel="noopener"
                                        href="https://book.cakephp.org/4/en/installation.html#url-rewriting">Help me
                                        configure it</a><br />
                                    2) <a target="_blank" rel="noopener"
                                        href="https://book.cakephp.org/4/en/development/configuration.html#general-configuration">I
                                        don't / can't use URL rewriting</a>
                                </li>
                            </ul>
                        </div>
                        <?php Debugger::checkSecurityKeys(); ?>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2>Courses</h2>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Courses', 'action' => 'index']) ?>'">
                                    View Courses 📚
                                </button>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Courses', 'action' => 'add']) ?>'">
                                    Add Courses ✏
                                </button><br>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2>Teachers</h2>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Teachers', 'action' => 'index']) ?>'">
                                    View Teachers 👨‍🏫
                                </button>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Teachers', 'action' => 'add']) ?>'">
                                    Add Teachers 🎓
                                </button><br>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2>Classes</h2>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'CourseClasses', 'action' => 'index']) ?>'">
                                    View Course Classes ⏰
                                </button>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'CourseClasses', 'action' => 'add']) ?>'">
                                    Add Classes 🔔
                                </button><br>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2>Students</h2>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Students', 'action' => 'index']) ?>'">
                                    View Students 👨‍🎓
                                </button>
                                <button type="button" class="btn btn-success mx-2"
                                    onclick="window.location.href='<?= $this->Url->build(['controller' => 'Students', 'action' => 'add']) ?>'">
                                    Add Student ✅
                                </button><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>