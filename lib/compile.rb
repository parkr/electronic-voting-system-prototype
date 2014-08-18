#!/usr/bin/env ruby -wKU

file = "/Users/parkermoore/Dropbox/Cornell/INFO1140/gvsys/lib/bootstrap.less"
parts = File.split(file)
css = parts[0] << "/../" << parts[1][0..-6] << ".css"
system("lessc \"#{file}\" > \"#{css}\"")