# PHP Project Clean Boilerplate

[![Build Status](https://travis-ci.org/31H0B1eV/php-boilerplate.svg?branch=master)](https://travis-ci.org/31H0B1eV/php-boilerplate)
[![Issue Count](https://codeclimate.com/github/31H0B1eV/php-boilerplate/badges/issue_count.svg)](https://codeclimate.com/github/31H0B1eV/php-boilerplate)
[![Test Coverage](https://codeclimate.com/github/31H0B1eV/php-boilerplate/badges/coverage.svg)](https://codeclimate.com/github/31H0B1eV/php-boilerplate/coverage)

I found myself writing the same project boilerplate time and time again, so decided to create this boilerplate project
to help reduce the time required when starting a new piece of code.

Project based on [laradock](https://github.com/laradock/laradock) with little tweaks. It use laradock container for build workspace, it can be changed but there is no any reason for now. This is development setup and exists not only for simplify my developer life but it also playing field for my own research with different tools, so sometimes bugs or missunderstandings can be here. Please think twice before use it in production.

### Setup:
- `mkdir <project_folder_name> && cd <project_folder_name>`
- `git clone --bare <repo_url> .git`
- `git config --bool core.bare false`
- `git reset --hard`
- First change applications volumes path in docker-compose.yml
- Rename nginx/sites/default.conf file and add correct server_name and root | also add related record to hosts file.
- Run containers, example: `docker-compose up -d nginx mysql` (or build it before: `docker-compose up --build -d nginx`);

### Using:
- `docker-compose up -d nginx mysql`
- `docker-compose down`
- `docker-compose exec workspace bash`