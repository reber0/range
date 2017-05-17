xss1    未过滤反射型xss
xss2    反射型xss，preg_replace('/<script>/','',$id)
xss3    反射型xss，preg_replace('/<script>/i','',$id)
xss4    反射型xss，preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t>/i','',$id)
xss5    反射型xss，过滤单引号和双引号
xss6    反射型xss，preg_replace('/<.*>/', '', $id);

xss7    存储型xss
xss8    DOM型xss