require 'json'

module Jekyll
  class JSONPostGenerator < Generator
    safe true

    def generate(site)
      site.posts.each do |post|
        post.data['content'] = post.content

        post_path = post.destination(site.dest)

        post_path['/index.html'] = '.json'

        file_path = File.dirname(post_path)
        file_name = post_path.split('/').last

        unless File.directory?(file_path)
          FileUtils.mkdir_p(file_path)
        end

        File.open(File.join(file_path, file_name), 'w') do |file|
          file.write(post.data.to_json)
        end

        static_file = Jekyll::StaticFile.new(site, site.dest, file_path.split(site.dest).last, file_name)

        static_file.write(file_path)

        site.static_files << static_file
      end
    end
  end
end