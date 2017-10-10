require 'jekyll'

desc 'Build the site to `./public`'
task :build do
  Jekyll::Commands::Build.process(
    config: 'config/jekyll.yml',
    profile: true,
    trace: true
  )
end
