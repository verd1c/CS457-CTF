import os
import binascii
from base64 import b64encode, b64decode
from flask import Flask, render_template, render_template_string, url_for, redirect, session, request, make_response

app = Flask(__name__)

HOST = '0.0.0.0'
PORT = '1337'

@app.route('/', methods=['GET'])
def index():


	if 'path' not in request.cookies:
		cookie = 'Lw=='
	else:
		cookie = request.cookies.get('path')
		print("COOKIE: ",cookie)
		if cookie == '':
			cookie = 'Lw=='	

	try:
		path = b64decode(cookie).decode('utf-8')
	except:
		path = '/'
	
	print("REQUESTED PATH: ",path)

	nino_path = os.path.realpath('/nino' + path)
	is_nino_path = os.path.realpath(nino_path).startswith('/nino')

	if os.path.isfile(nino_path) and is_nino_path:

		# If cookie is file

		print("FILE:",nino_path)

		f = open(nino_path,"r")
		lines = f.readlines()		

		resp = make_response(render_template('file.html',path=path,lines=lines))

		return resp

	else:

		# If cookie is directory

		path = path if is_nino_path else '/';
		path = path if os.path.isdir(nino_path) else '/';
		nino_path = os.path.realpath('/nino' + path)

		print("DIRECTORY:",nino_path)

		filenames = os.listdir(nino_path)

		resp = make_response(render_template('directory.html',path=path,filenames=filenames))
		resp.set_cookie('path', b64encode(path.encode('utf-8')))

		return resp

if __name__ == '__main__':
	app.run(HOST,PORT)