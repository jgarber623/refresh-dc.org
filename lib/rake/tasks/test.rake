require 'html-proofer'

desc 'Test the site with html-proofer and sass-lint'
task :test do
  HTMLProofer.check_directory('./public', {
    assume_extension: true,
    disable_external: true,
    only_4xx: true
  }).run

  sh 'sass-lint -v -q'
end
