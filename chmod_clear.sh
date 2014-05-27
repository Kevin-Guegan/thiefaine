#!/bin/sh
if [ $# = 1 ]; then
	sudo chmod -R ugo-x,u+rwX,go+rX,go-w $1
fi
