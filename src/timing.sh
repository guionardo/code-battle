#!/bin/sh
echo "* Generating time data for $NAME"
/usr/bin/time -v -o /reports/time.$NAME "$@"
echo "* Generating valgrind data for $NAME"
valgrind --tool=massif --pages-as-heap=yes --massif-out-file=/reports/valgrind.$NAME "$@"    
echo "* END OF $NAME"
