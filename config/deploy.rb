default_run_options[:pty] = true
set :use_sudo, false

set :application, "beaconyouth"
set :domain,      "#{application}.org"
set :deploy_to,   "/home/gchristensen/sites/#{domain}"

set :repository,  "https://github.com/grahamc/beaconyouth.org.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, `subversion` or `none`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Rails migrations will run

set  :keep_releases,  3
