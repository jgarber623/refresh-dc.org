desc 'Build the site within the release path'
task :build do
  on roles(:all) do
    within fetch(:release_path) do
      with jekyll_env: fetch(:stage) do
        execute :bundle, :exec, :jekyll, :build, '--config', 'config/jekyll.yml'
      end
    end
  end
end
