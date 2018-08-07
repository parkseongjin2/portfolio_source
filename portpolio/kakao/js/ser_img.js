var m_img=$('.sevice_mobile_wrap img');
var img_m_src=[];
var pc_img=$('.sevice_pc_wrap img');
var img_pc_src=[];

for(var i=1;i<m_img.length+1;i++){
  img_m_src.push('img/ser_m_img0'+i+'.jpg');
}
for(var p=1;p<pc_img.length+1;p++){
  img_pc_src.push('img/ser_pc_img0'+p+'.jpg');
}

for(var j=0;j<m_img.length;j++){
  m_img.eq(j).attr('src',img_m_src[j]);
}
for(var c=0;c<pc_img.length;c++){
  pc_img.eq(c).attr('src',img_pc_src[c]);
}