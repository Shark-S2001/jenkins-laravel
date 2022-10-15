pipeline {
 agent any
 stages {
        stage("Build") {
            steps {
                sh 'curl -sS getcomposer.org/installer | php'
                sh 'php composer.phar install'
                sh 'composer --version'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage("Unit test") {
            steps {
                sh 'php artisan test'
            }
        }
  }
}
