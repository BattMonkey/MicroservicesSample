# Customer Service

from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Customer(Resource):
	def get(self):
		return {
			'customers': ['Bat',
				    'Cow',
					'Dog',
				    'Horse',
					'Lion'
					]
			}

api.add_resource(Customer, '/')

if __name__ == '__main__':
	app.run(host='0.0.0.0', port=80, debug=True)