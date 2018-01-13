require 'jekyll'

desc 'Serve the site at `http://localhost:4000`'
task :serve do
  options = {
    config: 'config/jekyll.yml',
    serving: true,
    trace: true,
    watch: true
  }

  Jekyll::PluginManager.require_from_bundler

  Jekyll::Commands::Build.process(options)
  Jekyll::Commands::Serve.process(options)
end
