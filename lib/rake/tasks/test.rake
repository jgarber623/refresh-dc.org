require 'html-proofer'

desc 'Test the site with sass-lint and html-proofer'
task :test do
  sh 'sass-lint -v -q'

  HTMLProofer.check_directory('./public', assume_extension: true, only_4xx: true).run
end
