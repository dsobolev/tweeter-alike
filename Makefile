available:
	echo "start, stop, art"

start:
	bash vendor/bin/sail up -d

stop:
	bash vendor/bin/sail down

art:
	bash vendor/bin/sail artisan


.PHONY: start stop art