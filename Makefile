build: ./swagger-confluence-client.yaml
	openapi-generator generate \
		-i ./swagger-confluence-client.yaml \
		-g php \
		-o ./ \
		--additional-properties invokerPackage=ConfluenceClient \
		--additional-properties packageName=php-confluence-client \
		--git-user-id=adesso-mobile \
		--git-repo-id=php-confluence-client
