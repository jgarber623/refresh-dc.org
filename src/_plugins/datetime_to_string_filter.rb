module Jekyll
  module DatetimeToStringFilter
    def datetime_to_string(input)
      datetime = time(input)

      datetime.strftime("%A, %B #{ordinalize datetime.strftime("%-d")}, %Y")
    end

    def ordinalize(input)
      ordinal = case input
        when '1', '21', '31'; 'st'
        when '2', '22';       'nd'
        when '3', '23';       'rd'
        else                  'th'
      end

      "#{input}<sup>#{ordinal}</sup>"
    end
  end
end

Liquid::Template.register_filter(Jekyll::DatetimeToStringFilter)
