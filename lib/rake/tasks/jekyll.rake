require 'jekyll'

namespace :jekyll do
  desc 'Build the site to `./public`'
  task :build do
    Jekyll::Commands::Build.process(
      config: 'config/jekyll.yml',
      profile: true,
      trace: true
    )
  end

  desc 'Serve the site at `http://localhost:4000`'
  task :serve do
    options = {
      config: 'config/jekyll.yml',
      serving: true,
      trace: true,
      watch: true
    }

    Jekyll::Commands::Build.process(options)
    Jekyll::Commands::Serve.process(options)
  end
end
