require 'html-proofer'

desc 'Test the site with html-proofer and sass-lint'
task :test do
  Rake::Task['build'].invoke unless File.directory?('./public')

  HTMLProofer.check_directory('./public', {
    assume_extension: true,
    disable_external: true,
    only_4xx: true
  }).run

  sh 'sass-lint -v -q'
end
