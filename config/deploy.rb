# config valid only for current version of Capistrano
lock '3.10.1'

set :application, 'refresh-dc.org'
set :repo_url, 'git@github.com:jgarber623/refresh-dc.org.git'
set :chruby_ruby, 'ruby-2.4.2'

before 'deploy:publishing', :build
