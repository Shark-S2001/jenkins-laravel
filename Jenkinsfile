pipeline {
 agent any
 stages {
        stage("Build") {
            steps {
                sh curl -sS https://getcomposer.org/installer | php56
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
