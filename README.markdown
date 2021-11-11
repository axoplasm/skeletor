Skeletor
========

Truly barebones HTML + [sass](//sass-lang.com) + [Pelican](//blog.getpelican.com) boilerplate for front-end dev.

[skeletor.axoplasm.com](//skeletor.axoplasm.com)


### Installation 

```bash
$ python3 -m venv venv
$ source venv/bin/activate
$ pip install -r requirements.txt
$ npm install
```

### Local development

In one terminal:

```bash
$ pelican content --autoreload --listen
```

In another terminal:

```bash
$ npm start
```

Local site served at [127.0.0.1:8000](http://127.0.0.1:8000)
