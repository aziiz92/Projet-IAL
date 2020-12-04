from suds.client import Client

client = Client('http://localhost/projetIAL/server.php?wsdl')
result = client.service.getUserSoap(1)
print(result)
