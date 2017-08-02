require 'html-proofer'

desc 'Test the site with html-proofer'
task :htmlproofer do
  options = {
    assume_extension: true,
    typhoeus: {
      timeout: 30
    }
  }

  HTMLProofer.check_directory('./public', options).run
end
