#!/bin/sh

for i in `seq 0 9`
do
  convert -background white -fill blue -font ArialBk -pointsize 50 label:$i $i.jpg
done
