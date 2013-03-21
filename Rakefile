require 'erb'

task :default => 'setup'

desc 'Create Capistrano deploy script'
task :configure_deploy_script do
  src = 'config/deploy.rb.example'
  target = 'config/deploy.rb'
  
  if File.exists?( target )
    puts 'Capistrano deploy script already exists!'
  else
    File.open( target, 'w' ) do |new_file|
      new_file.write ERB.new( File.read( src ) ).result( binding )
      puts 'Capistrano deploy script successfully created!'
    end
  end
end

desc 'Run setup tasks'
task :setup do
  Rake::Task['configure_deploy_script'].invoke
end