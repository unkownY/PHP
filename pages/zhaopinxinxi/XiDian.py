# coding:utf-8

import urllib2
import re
 
#headers = {'User-Agent' : 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36'}

south_url = 'http://job.xidian.edu.cn/html/zpxx/nxqzph/'
north_url = 'http://job.xidian.edu.cn/html/zpxx/bxqzph/'

# print type(south)

def info(url,dir):
	str = '<tdstyle="width:15%;">(.*?)</td><tdstyle="width:15%;">(.*?)</td><tdstyle="width:20%;">(.*?)</td><tdstyle="width:35%;"><ahref="(.*?)"title="(.*?)"target="_blank">.*?</tr>'
	page = urllib2 .urlopen(url) .read().replace(" ","").replace("\n","").replace("\r" ,"")
	result = re .findall(str ,page ,re.S )

	# north
	if dir==1 :
		south_file = open('XD_S.txt' ,'w')
		south_file.write("<table border='1' style='margin:auto;'><tbody>")
		south_file.write('<tr><td>Date</td><td>Time</td><td>Location</td><td>Company</td></tr>')
		for i in result :
			south_file .write("<tr>")
			south_file .write('<td>'+i[0]+'</td>')
			south_file .write('<td>'+i[1]+'</td>')
			south_file .write('<td>'+i[2]+'</td>')
			south_file .write('<td><a href="http://job.xidian.edu.cn'+i[3]+'">'+i[4]+'</a></td>')
			south_file .write("</tr>")
		south_file.write("<tbody></table>")
		south_file.close()
		
	# south
	elif dir==2 :
		north_file = open('XD_N.txt' ,'w')
		north_file.write("<table border='1'><tbody>")
		north_file.write('<tr><td>Date</td><td>Time</td><td>Location</td><td>Company</td></tr>')
		for i in result :
			north_file .write("<tr>")
			north_file .write('<td>'+i[0]+'</td>')
			north_file .write('<td>'+i[1]+'</td>')
			north_file .write('<td>'+i[2]+'</td>')
			north_file .write('<td><a href="http://job.xidian.edu.cn'+i[3]+'">'+i[4]+'</a></td>')
			north_file .write("</tr>")
		north_file.write("<tbody></table>")
		north_file.close()


info(south_url ,1)
info(north_url ,2)