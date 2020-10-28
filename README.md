# wp-healthcheck-api
Dead simple plugin that adds a health check endpoint to wordpress api. Useful for monitoring tools, for example.

`yoursite.com/wp-json/healthcheck/shallow` returns `true`.

Behind the scenes, wordpress will do its thing: it'll connect to the database, load all the plugins... It'll go through basically everything that's needed to open the home page of your site. This means that if this endpoint works and does not timeout, your site is online.

Hook this to a monitoring tool that polls this endpoint every 15 minutes, for example, and it'll let you know if your blog went offline.
