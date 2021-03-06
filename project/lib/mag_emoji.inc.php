<?
//============== 絵文字 ========================
/**
 * 絵文字タグをメール用絵文字に変換
 * 'abc[AUメール用絵文字]def' = this("abc<%EMOJI::123%>def", 'e') 
 *@param string source 本文(絵文字部分を<%EMOJI::絵文字番号%>で表記)
 *@param string carrier i:docomo e:au s:softbank
 */
function tag2emojiForMail($source, $carrier){
	$func = "callback_tag2emoji_" . $carrier;
	$source = preg_replace_callback ( "/<\%EMOJI::([a-zA-Z0-9_]+)\%>/", $func, $source);
	return $source;
}
function callback_tag2emoji_i($match){
	return callback_tag2emoji($match[1], "i");
}
function callback_tag2emoji_e($match){
	return callback_tag2emoji($match[1], "e");
}
function callback_tag2emoji_s($match){
	return callback_tag2emoji($match[1], "s");
}
function callback_tag2emoji($emoji_id,$carrier){
	global $g_emoji;
	debug('$g_emoji['.$emoji_id.']['.$carrier.']='.$g_emoji[$emoji_id][$carrier]);
	return $g_emoji[$emoji_id][$carrier];
}
function magLoadEmoji(){
	global $g_emoji;
//	$g_emoji = array(1=>array('i'=>'��','e'=>makeEzEmoji('EBD4'),'s'=>"\x1B\$".'Gj'."\x0F"),
//2=>array('i'=>'��','e'=>makeEzEmoji('EBD5'),'s'=>"\x1B\$".'Gi'."\x0F"),);
	$g_emoji = array(
//本文ng TitleOK  1=>array('i'=>'��','e'=>makeEzEmoji('EB60'),'s'=>"\x1B\$".'Gj'."\x0F"),
1=>array('i'=>'��','e'=>makeEzEmoji('EB60'),'s'=>pack('H*','EE818A')),
2=>array('i'=>'��','e'=>makeEzEmoji('EB65'),'s'=>pack('H*','EE8189')),
3=>array('i'=>'�｡','e'=>makeEzEmoji('EB64'),'s'=>pack('H*','EE818B')),
4=>array('i'=>'�｢','e'=>makeEzEmoji('EB5D'),'s'=>pack('H*','EE8188')),
5=>array('i'=>'�｣','e'=>makeEzEmoji('EB5F'),'s'=>pack('H*','EE84BD')),
6=>array('i'=>'�､','e'=>makeEzEmoji('EB41'),'s'=>pack('H*','EE9183')),
7=>array('i'=>'�･','e'=>makeEzEmoji('ECB5'),'s'=>""),
8=>array('i'=>'�ｦ','e'=>makeEzEmoji('EDBC'),'s'=>pack('H*','EE90BC')),
9=>array('i'=>'�ｧ','e'=>makeEzEmoji('EB67'),'s'=>pack('H*','EE88BF')),
10=>array('i'=>'�ｨ','e'=>makeEzEmoji('EB68'),'s'=>pack('H*','EE8980')),
11=>array('i'=>'�ｩ','e'=>makeEzEmoji('EB69'),'s'=>pack('H*','EE8981')),
12=>array('i'=>'�ｪ','e'=>makeEzEmoji('EB6A'),'s'=>pack('H*','EE8982')),
13=>array('i'=>'�ｫ','e'=>makeEzEmoji('EB6B'),'s'=>pack('H*','EE8983')),
14=>array('i'=>'�ｬ','e'=>makeEzEmoji('EB6C'),'s'=>pack('H*','EE8984')),
15=>array('i'=>'�ｭ','e'=>makeEzEmoji('EB6D'),'s'=>pack('H*','EE8985')),
16=>array('i'=>'�ｮ','e'=>makeEzEmoji('EB6E'),'s'=>pack('H*','EE8986')),
17=>array('i'=>'�ｯ','e'=>makeEzEmoji('EB6F'),'s'=>pack('H*','EE8987')),
18=>array('i'=>'�ｰ','e'=>makeEzEmoji('EB70'),'s'=>pack('H*','EE8988')),
19=>array('i'=>'�ｱ','e'=>makeEzEmoji('EB71'),'s'=>pack('H*','EE8989')),
20=>array('i'=>'�ｲ','e'=>makeEzEmoji('EB72'),'s'=>pack('H*','EE898A')),
21=>array('i'=>'�ｳ','e'=>makeEzEmoji('ECE6'),'s'=>pack('H*','EE8C99')),
22=>array('i'=>'�ｴ','e'=>makeEzEmoji('EB93'),'s'=>pack('H*','EE8096')),
23=>array('i'=>'�ｵ','e'=>makeEzEmoji('ECB6'),'s'=>pack('H*','EE8094')),
24=>array('i'=>'�ｶ','e'=>makeEzEmoji('EB90'),'s'=>pack('H*','EE8095')),
25=>array('i'=>'�ｷ','e'=>makeEzEmoji('EB8F'),'s'=>pack('H*','EE8098')),
26=>array('i'=>'�ｸ','e'=>makeEzEmoji('ED80'),'s'=>pack('H*','EE8093')),
27=>array('i'=>'�ｹ','e'=>makeEzEmoji('ECB7'),'s'=>pack('H*','EE90AA')),
28=>array('i'=>'�ｺ','e'=>makeEzEmoji('EB92'),'s'=>pack('H*','EE84B2')),
29=>array('i'=>'�ｻ','e'=>makeEzEmoji('ECB8'),'s'=>""),
30=>array('i'=>'�ｼ','e'=>makeEzEmoji('EB8E'),'s'=>pack('H*','EE809E')),
31=>array('i'=>'�ｽ','e'=>makeEzEmoji('ECEC'),'s'=>pack('H*','EE90B4')),
32=>array('i'=>'�ｾ','e'=>makeEzEmoji('EB89'),'s'=>pack('H*','EE809F')),
33=>array('i'=>'�ｿ','e'=>makeEzEmoji('EB8A'),'s'=>pack('H*','EE809B')),
34=>array('i'=>'�ﾀ','e'=>makeEzEmoji('EB8A'),'s'=>pack('H*','EE90AE')),
35=>array('i'=>'�ﾁ','e'=>makeEzEmoji('EB88'),'s'=>pack('H*','EE8599')),
36=>array('i'=>'�ﾂ','e'=>makeEzEmoji('ED55'),'s'=>pack('H*','EE8882')),
37=>array('i'=>'�ﾃ','e'=>makeEzEmoji('EB8C'),'s'=>pack('H*','EE809D')),
38=>array('i'=>'�ﾄ','e'=>makeEzEmoji('EB84'),'s'=>pack('H*','EE80B6')),
39=>array('i'=>'�ﾅ','e'=>makeEzEmoji('EB86'),'s'=>pack('H*','EE80B8')),
40=>array('i'=>'�ﾆ','e'=>makeEzEmoji('ED51'),'s'=>pack('H*','EE8481')),
41=>array('i'=>'�ﾇ','e'=>makeEzEmoji('ED52'),'s'=>pack('H*','EE8595')),
42=>array('i'=>'�ﾈ','e'=>makeEzEmoji('EB83'),'s'=>pack('H*','EE858D')),
43=>array('i'=>'�ﾉ','e'=>makeEzEmoji('EB7B'),'s'=>pack('H*','EE8594')),
44=>array('i'=>'�ﾊ','e'=>makeEzEmoji('ED54'),'s'=>pack('H*','EE8598')),
45=>array('i'=>'�ﾋ','e'=>makeEzEmoji('EB7C'),'s'=>pack('H*','EE8596')),
46=>array('i'=>'�ﾌ','e'=>makeEzEmoji('EC8E'),'s'=>pack('H*','EE80BA')),
47=>array('i'=>'�ﾍ','e'=>makeEzEmoji('EB7E'),'s'=>pack('H*','EE858F')),
48=>array('i'=>'�ﾎ','e'=>makeEzEmoji('EB42'),'s'=>pack('H*','EE858E')),
49=>array('i'=>'�ﾏ','e'=>makeEzEmoji('EB7D'),'s'=>pack('H*','EE90A8')),
50=>array('i'=>'�ﾐ','e'=>makeEzEmoji('EB85'),'s'=>pack('H*','EE8183')),
51=>array('i'=>'�ﾑ','e'=>makeEzEmoji('ECB4'),'s'=>pack('H*','EE8185')),
52=>array('i'=>'�ﾒ','e'=>makeEzEmoji('EB9B'),'s'=>pack('H*','EE8184')),
53=>array('i'=>'�ﾓ','e'=>makeEzEmoji('EB9C'),'s'=>pack('H*','EE8187')),
54=>array('i'=>'�ﾔ','e'=>makeEzEmoji('EBAF'),'s'=>pack('H*','EE84A0')),
55=>array('i'=>'�ﾕ','e'=>makeEzEmoji('EBF3'),'s'=>pack('H*','EE84BE')),
56=>array('i'=>'�ﾖ','e'=>makeEzEmoji('EBEF'),'s'=>pack('H*','EE8C93')),
57=>array('i'=>'�ﾗ','e'=>makeEzEmoji('EBDC'),'s'=>pack('H*','EE80BC')),
58=>array('i'=>'�ﾘ','e'=>makeEzEmoji('EBF0'),'s'=>pack('H*','EE80BD')),
59=>array('i'=>'�ﾙ','e'=>makeEzEmoji('EC71'),'s'=>pack('H*','EE88B6')),
60=>array('i'=>'�ﾚ','e'=>makeEzEmoji(''),'s'=>""),
61=>array('i'=>'�ﾛ','e'=>makeEzEmoji('EBE1'),'s'=>pack('H*','EE8C8A')),
62=>array('i'=>'�ﾜ','e'=>makeEzEmoji('ECB9'),'s'=>pack('H*','EE9482')),
63=>array('i'=>'�ﾝ','e'=>makeEzEmoji('EDC9'),'s'=>pack('H*','EE9483')),
64=>array('i'=>'�ﾞ','e'=>makeEzEmoji('ECBB'),'s'=>pack('H*','EE84B2')),
65=>array('i'=>'�ﾟ','e'=>makeEzEmoji('EB76'),'s'=>pack('H*','EE84A5')),
66=>array('i'=>'��','e'=>makeEzEmoji('EB55'),'s'=>pack('H*','EE8C8E')),
67=>array('i'=>'��','e'=>makeEzEmoji('EB56'),'s'=>pack('H*','EE8888')),
68=>array('i'=>'��','e'=>makeEzEmoji('EBEE'),'s'=>pack('H*','EE8088')),
69=>array('i'=>'��','e'=>makeEzEmoji('EB74'),'s'=>pack('H*','EE849E')),
70=>array('i'=>'��','e'=>makeEzEmoji('EB77'),'s'=>pack('H*','EE8588')),
71=>array('i'=>'��','e'=>makeEzEmoji('ECBC'),'s'=>pack('H*','EE8C94')),
72=>array('i'=>'��','e'=>makeEzEmoji('EBA8'),'s'=>pack('H*','EE8492')),
73=>array('i'=>'��','e'=>makeEzEmoji('ECBD'),'s'=>pack('H*','EE8D8B')),
74=>array('i'=>'��','e'=>makeEzEmoji('ECB3'),'s'=>pack('H*','EE8089')),
75=>array('i'=>'��','e'=>makeEzEmoji('ECA5'),'s'=>pack('H*','EE808A')),
76=>array('i'=>'��','e'=>makeEzEmoji('ED65'),'s'=>pack('H*','EE8588')),
77=>array('i'=>'��','e'=>makeEzEmoji('EBDB'),'s'=>pack('H*','EE84AA')),
78=>array('i'=>'��','e'=>makeEzEmoji('EB9F'),'s'=>pack('H*','EE84AB')),
79=>array('i'=>'��','e'=>makeEzEmoji('EBE5'),'s'=>pack('H*','EE84A6')),
80=>array('i'=>'��','e'=>makeEzEmoji('ED78'),'s'=>pack('H*','')),
81=>array('i'=>'��','e'=>makeEzEmoji('ECBE'),'s'=>pack('H*','EE888E')),
82=>array('i'=>'��','e'=>makeEzEmoji('ECBF'),'s'=>pack('H*','EE888D')),
83=>array('i'=>'��','e'=>makeEzEmoji('ECC0'),'s'=>pack('H*','EE888F')),
84=>array('i'=>'��','e'=>makeEzEmoji('ECC1'),'s'=>pack('H*','EE9099')),
85=>array('i'=>'��','e'=>makeEzEmoji('ECC2'),'s'=>pack('H*','EE909B')),
86=>array('i'=>'��','e'=>makeEzEmoji('EE88'),'s'=>pack('H*','EE8090')),
87=>array('i'=>'��','e'=>makeEzEmoji('ECC3'),'s'=>pack('H*','EE8091')),
88=>array('i'=>'��','e'=>makeEzEmoji('ECC4'),'s'=>pack('H*','EE8092')),
89=>array('i'=>'��','e'=>makeEzEmoji('EC69'),'s'=>pack('H*','EE88B8')),
90=>array('i'=>'��','e'=>makeEzEmoji('EC68'),'s'=>pack('H*','EE88B7')),
91=>array('i'=>'��','e'=>makeEzEmoji('EDEB'),'s'=>pack('H*','EE94B6')),
92=>array('i'=>'��','e'=>makeEzEmoji('EDEC'),'s'=>pack('H*','EE8087')),
93=>array('i'=>'��','e'=>makeEzEmoji('EBD7'),'s'=>""),
94=>array('i'=>'��','e'=>makeEzEmoji('EB57'),'s'=>pack('H*','EE888A')),
95=>array('i'=>'�@','e'=>makeEzEmoji('ECC5'),'s'=>pack('H*','EE8899')),
96=>array('i'=>'�A','e'=>makeEzEmoji('ECC6'),'s'=>""),
97=>array('i'=>'�B','e'=>makeEzEmoji('ECC7'),'s'=>""),
98=>array('i'=>'�C','e'=>makeEzEmoji('EB5E'),'s'=>pack('H*','EE818C')),
99=>array('i'=>'�D','e'=>makeEzEmoji(''),'s'=>pack('H*','EE8CB2')),
100=>array('i'=>'�E','e'=>makeEzEmoji('EBBA'),'s'=>pack('H*','EE8192')),
101=>array('i'=>'�F','e'=>makeEzEmoji('EBB4'),'s'=>pack('H*','EE818F')),
102=>array('i'=>'�G','e'=>makeEzEmoji('EB8D'),'s'=>pack('H*','EE809C')),
103=>array('i'=>'�H','e'=>makeEzEmoji('EBA2'),'s'=>pack('H*','EE80B3')),
104=>array('i'=>'�I','e'=>makeEzEmoji('EC72'),'s'=>pack('H*','EE88B9')),
105=>array('i'=>'�r','e'=>makeEzEmoji('ECDF'),'s'=>pack('H*','EE8484')),
106=>array('i'=>'�s','e'=>makeEzEmoji('EE66'),'s'=>pack('H*','EE8483')),
107=>array('i'=>'�t','e'=>makeEzEmoji('EBF9'),'s'=>pack('H*','EE808B')),
108=>array('i'=>'�u','e'=>makeEzEmoji(''),'s'=>""),
109=>array('i'=>'�v','e'=>makeEzEmoji(''),'s'=>""),
110=>array('i'=>'�w','e'=>makeEzEmoji('EBFA'),'s'=>pack('H*','EE8483')),
111=>array('i'=>'�x','e'=>makeEzEmoji(''),'s'=>""),
112=>array('i'=>'�y','e'=>makeEzEmoji(''),'s'=>""),
113=>array('i'=>'�z','e'=>makeEzEmoji('EC9A'),'s'=>""),
114=>array('i'=>'�{','e'=>makeEzEmoji('EC95'),'s'=>pack('H*','EE8896')),
115=>array('i'=>'�|','e'=>makeEzEmoji('ED5B'),'s'=>pack('H*','EE88A9')),
116=>array('i'=>'�}','e'=>makeEzEmoji('EBF2'),'s'=>pack('H*','EE80BF')),
117=>array('i'=>'�~','e'=>makeEzEmoji('EC79'),'s'=>pack('H*','EE898C')),
118=>array('i'=>'��','e'=>makeEzEmoji('ECC8'),'s'=>""),
119=>array('i'=>'��','e'=>makeEzEmoji('EBF1'),'s'=>pack('H*','EE8494')),
120=>array('i'=>'��','e'=>makeEzEmoji('ECE5'),'s'=>pack('H*','EE8892')),
121=>array('i'=>'��','e'=>makeEzEmoji('EDED'),'s'=>""),
122=>array('i'=>'��','e'=>makeEzEmoji(''),'s'=>pack('H*','EE8891')),
123=>array('i'=>'��','e'=>makeEzEmoji('EE89'),'s'=>pack('H*','EE8890')),
124=>array('i'=>'��','e'=>makeEzEmoji('EC48'),'s'=>pack('H*','EE80A0')),
125=>array('i'=>'��','e'=>makeEzEmoji('EBFB'),'s'=>pack('H*','EE889C')),
126=>array('i'=>'��','e'=>makeEzEmoji('EBFC'),'s'=>pack('H*','EE889D')),
127=>array('i'=>'��','e'=>makeEzEmoji('EC40'),'s'=>pack('H*','EE889E')),
128=>array('i'=>'��','e'=>makeEzEmoji('EC41'),'s'=>pack('H*','EE889F')),
129=>array('i'=>'��','e'=>makeEzEmoji('EC42'),'s'=>pack('H*','EE88A0')),
130=>array('i'=>'��','e'=>makeEzEmoji('EC43'),'s'=>pack('H*','EE88A1')),
131=>array('i'=>'��','e'=>makeEzEmoji('EC44'),'s'=>pack('H*','EE88A2')),
132=>array('i'=>'��','e'=>makeEzEmoji('EC45'),'s'=>pack('H*','EE88A3')),
133=>array('i'=>'��','e'=>makeEzEmoji('EC46'),'s'=>pack('H*','EE88A4')),
134=>array('i'=>'��','e'=>makeEzEmoji('ECC9'),'s'=>pack('H*','EE88A5')),
135=>array('i'=>'�ｰ','e'=>makeEzEmoji('ECCA'),'s'=>pack('H*','EE898D')),
136=>array('i'=>'��','e'=>makeEzEmoji('ECB2'),'s'=>pack('H*','EE80A2')),
137=>array('i'=>'��','e'=>makeEzEmoji('EE79'),'s'=>pack('H*','EE8CA8')),
138=>array('i'=>'��','e'=>makeEzEmoji('EB4F'),'s'=>pack('H*','EE80A3')),
139=>array('i'=>'��','e'=>makeEzEmoji('EB50'),'s'=>pack('H*','EE8CA7')),
140=>array('i'=>'��','e'=>makeEzEmoji('EB49'),'s'=>pack('H*','EE8081')),
141=>array('i'=>'��','e'=>makeEzEmoji('EB4A'),'s'=>pack('H*','EE8199')),
142=>array('i'=>'��','e'=>makeEzEmoji('ED94'),'s'=>pack('H*','EE8198')),
143=>array('i'=>'��','e'=>makeEzEmoji('ED97'),'s'=>pack('H*','EE9087')),
144=>array('i'=>'��','e'=>makeEzEmoji('ECCB'),'s'=>pack('H*','EE9090')),
145=>array('i'=>'��','e'=>makeEzEmoji('EDEE'),'s'=>pack('H*','EE88B6')),
146=>array('i'=>'��','e'=>makeEzEmoji('ECEE'),'s'=>pack('H*','EE80BE')),
147=>array('i'=>'��','e'=>makeEzEmoji('EB95'),'s'=>pack('H*','EE84A3')),
148=>array('i'=>'��','e'=>makeEzEmoji(''),'s'=>pack('H*','EE8884')),
149=>array('i'=>'��','e'=>makeEzEmoji('EBC4'),'s'=>pack('H*','EE8083')),
150=>array('i'=>'��','e'=>makeEzEmoji('ED7E'),'s'=>pack('H*','EE8CAE')),
151=>array('i'=>'��','e'=>makeEzEmoji('EB4E'),'s'=>pack('H*','EE848F')),
152=>array('i'=>'�｡','e'=>makeEzEmoji('EBBE'),'s'=>pack('H*','EE8CB4')),
153=>array('i'=>'�｢','e'=>makeEzEmoji('EBCC'),'s'=>pack('H*','EE808D')),
154=>array('i'=>'�｣','e'=>makeEzEmoji('EB52'),'s'=>pack('H*','EE8C91')),
155=>array('i'=>'�､','e'=>makeEzEmoji('EBDE'),'s'=>pack('H*','EE8CA6')),
156=>array('i'=>'�･','e'=>makeEzEmoji('EDEF'),'s'=>pack('H*','EE90A1')),
157=>array('i'=>'�ｦ','e'=>makeEzEmoji('EB4D'),'s'=>pack('H*','EE84BC')),
158=>array('i'=>'�ｧ','e'=>makeEzEmoji('EB5A'),'s'=>pack('H*','EE80A1')),
159=>array('i'=>'�ｨ','e'=>makeEzEmoji('EDF0'),'s'=>""),
160=>array('i'=>'�ｩ','e'=>makeEzEmoji('EDF1'),'s'=>pack('H*','EE80A1')),
161=>array('i'=>'�ｪ','e'=>makeEzEmoji('ECCD'),'s'=>""),
162=>array('i'=>'�ｫ','e'=>makeEzEmoji('ECCE'),'s'=>pack('H*','EE8CB1')),
163=>array('i'=>'�ｬ','e'=>makeEzEmoji('EBBF'),'s'=>""),
164=>array('i'=>'�ｭ','e'=>makeEzEmoji('EBCD'),'s'=>pack('H*','EE8CB0')),
165=>array('i'=>'�ｮ','e'=>makeEzEmoji(''),'s'=>""),
166=>array('i'=>'�ｯ','e'=>makeEzEmoji('EDF2'),'s'=>""),
167=>array('i'=>'�P','e'=>makeEzEmoji('EB97'),'s'=>pack('H*','EE8CA4')),
168=>array('i'=>'�Q','e'=>makeEzEmoji(''),'s'=>""),
169=>array('i'=>'�R','e'=>makeEzEmoji('ECDA'),'s'=>pack('H*','EE8C81')),
170=>array('i'=>'�U','e'=>makeEzEmoji('EBD5'),'s'=>pack('H*','EE8081')),
171=>array('i'=>'�V','e'=>makeEzEmoji(''),'s'=>pack('H*','EE849F')),
172=>array('i'=>'�W','e'=>makeEzEmoji('EDC5'),'s'=>pack('H*','EE918B')),
173=>array('i'=>'�[','e'=>makeEzEmoji(''),'s'=>""),
174=>array('i'=>'','e'=>makeEzEmoji(''),'s'=>""),
175=>array('i'=>'�]','e'=>makeEzEmoji(''),'s'=>""),
176=>array('i'=>'�^','e'=>makeEzEmoji('ECB1'),'s'=>pack('H*','EE80A4')),
201=>array('i'=>'�ｱ','e'=>makeEzEmoji(''),'s'=>""),
202=>array('i'=>'�ｲ','e'=>makeEzEmoji(''),'s'=>""),
203=>array('i'=>'�ｳ','e'=>makeEzEmoji('ECE6'),'s'=>pack('H*','EE8086')),
204=>array('i'=>'�ｴ','e'=>makeEzEmoji('EBDD'),'s'=>""),
205=>array('i'=>'�ｵ','e'=>makeEzEmoji('EBE2'),'s'=>pack('H*','EE8C9C')),
206=>array('i'=>'�ｶ','e'=>makeEzEmoji('EE7B'),'s'=>""),
207=>array('i'=>'�ｷ','e'=>makeEzEmoji('EB91'),'s'=>pack('H*','EE8097')),
208=>array('i'=>'�ｸ','e'=>makeEzEmoji('EBEB'),'s'=>pack('H*','EE8CA5')),
209=>array('i'=>'�ｹ','e'=>makeEzEmoji(''),'s'=>""),
210=>array('i'=>'�ｺ','e'=>makeEzEmoji('EBA0'),'s'=>pack('H*','EE84AF')),
211=>array('i'=>'�ｻ','e'=>makeEzEmoji('ECE8'),'s'=>pack('H*','')),
212=>array('i'=>'�ｼ','e'=>makeEzEmoji('EE7C'),'s'=>pack('H*','EE8483')),
213=>array('i'=>'�ｽ','e'=>makeEzEmoji('ECA4'),'s'=>pack('H*','EE8496')),
214=>array('i'=>'�ｾ','e'=>makeEzEmoji('EB79'),'s'=>pack('H*','EE8C81')),
215=>array('i'=>'�ｿ','e'=>makeEzEmoji('ECF9'),'s'=>pack('H*','EE80B1')),
216=>array('i'=>'�ﾀ','e'=>makeEzEmoji('EBED'),'s'=>pack('H*','EE80B4')),
217=>array('i'=>'�ﾁ','e'=>makeEzEmoji('EB54'),'s'=>""),
218=>array('i'=>'�ﾂ','e'=>makeEzEmoji('EB87'),'s'=>pack('H*','EE84B6')),
219=>array('i'=>'�ﾃ','e'=>makeEzEmoji('ED82'),'s'=>pack('H*','EE8CB8')),
220=>array('i'=>'�ﾄ','e'=>makeEzEmoji('EC97'),'s'=>""),
221=>array('i'=>'�ﾅ','e'=>makeEzEmoji('ED94'),'s'=>pack('H*','EE9083')),
222=>array('i'=>'�ﾆ','e'=>makeEzEmoji('ED99'),'s'=>pack('H*','EE908A')),
223=>array('i'=>'�ﾇ','e'=>makeEzEmoji(''),'s'=>""),
224=>array('i'=>'�ﾈ','e'=>makeEzEmoji('ECF6'),'s'=>pack('H*','EE8488')),
225=>array('i'=>'�ﾉ','e'=>makeEzEmoji('EE61'),'s'=>pack('H*','EE9096')),
226=>array('i'=>'�ﾊ','e'=>makeEzEmoji('ED9D'),'s'=>pack('H*','EE908E')),
227=>array('i'=>'�ﾋ','e'=>makeEzEmoji('ECF4'),'s'=>pack('H*','EE8486')),
228=>array('i'=>'�ﾌ','e'=>makeEzEmoji('EBD2'),'s'=>pack('H*','EE808E')),
229=>array('i'=>'�ﾍ','e'=>makeEzEmoji('EBC0'),'s'=>pack('H*','EE8485')),
230=>array('i'=>'�ﾎ','e'=>makeEzEmoji('ECF3'),'s'=>pack('H*','EE9085')),
231=>array('i'=>'�ﾏ','e'=>makeEzEmoji('ED99'),'s'=>pack('H*','EE908D')),
232=>array('i'=>'�ﾐ','e'=>makeEzEmoji('ED96'),'s'=>pack('H*','EE9086')),
233=>array('i'=>'�ﾑ','e'=>makeEzEmoji('ED93'),'s'=>pack('H*','EE9082')),
234=>array('i'=>'�ﾒ','e'=>makeEzEmoji('EB4B'),'s'=>pack('H*','EE9091')),
235=>array('i'=>'�ﾓ','e'=>makeEzEmoji('EE6D'),'s'=>pack('H*','EE9093')),
236=>array('i'=>'�ﾔ','e'=>makeEzEmoji(''),'s'=>pack('H*','EE90A3')),
237=>array('i'=>'�ﾕ','e'=>makeEzEmoji('EB78'),'s'=>""),
238=>array('i'=>'�ﾖ','e'=>makeEzEmoji('EC74'),'s'=>pack('H*','EE898E')),
239=>array('i'=>'�ﾗ','e'=>makeEzEmoji('EC6A'),'s'=>pack('H*','EE94B7')),
240=>array('i'=>'�ﾘ','e'=>makeEzEmoji('EB43'),'s'=>pack('H*','EE8495')),
241=>array('i'=>'�ﾙ','e'=>makeEzEmoji('EBCA'),'s'=>pack('H*','EE8C95')),
242=>array('i'=>'�ﾚ','e'=>makeEzEmoji('EE7D'),'s'=>""),
243=>array('i'=>'�ﾛ','e'=>makeEzEmoji('EC75'),'s'=>pack('H*','EE898F')),
244=>array('i'=>'�ﾜ','e'=>makeEzEmoji('EB59'),'s'=>pack('H*','EE8992')),
245=>array('i'=>'�ﾝ','e'=>makeEzEmoji(''),'s'=>""),
246=>array('i'=>'�ﾞ','e'=>makeEzEmoji('ED5D'),'s'=>pack('H*','EE88AB')),
247=>array('i'=>'�ﾟ','e'=>makeEzEmoji(''),'s'=>""),
248=>array('i'=>'��','e'=>makeEzEmoji('ED5C'),'s'=>pack('H*','EE88AA')),
249=>array('i'=>'��','e'=>makeEzEmoji('EE7E'),'s'=>""),
250=>array('i'=>'��','e'=>makeEzEmoji('EE80'),'s'=>""),
251=>array('i'=>'��','e'=>makeEzEmoji('ED53'),'s'=>pack('H*','EE8597')),
252=>array('i'=>'��','e'=>makeEzEmoji('EE81'),'s'=>pack('H*','EE90BE')),
253=>array('i'=>'��','e'=>makeEzEmoji('ECED'),'s'=>pack('H*','EE80BB')),
254=>array('i'=>'��','e'=>makeEzEmoji('EBEC'),'s'=>pack('H*','EE8490')),
255=>array('i'=>'��','e'=>makeEzEmoji('EBAB'),'s'=>""),
256=>array('i'=>'��','e'=>makeEzEmoji('EBBD'),'s'=>pack('H*','EE8C84')),
257=>array('i'=>'��','e'=>makeEzEmoji('EDF6'),'s'=>""),
258=>array('i'=>'��','e'=>makeEzEmoji('ED8D'),'s'=>pack('H*','EE8D85')),
259=>array('i'=>'��','e'=>makeEzEmoji('EE82'),'s'=>""),
260=>array('i'=>'��','e'=>makeEzEmoji('EBA7'),'s'=>pack('H*','EE8498')),
261=>array('i'=>'��','e'=>makeEzEmoji('EBA3'),'s'=>pack('H*','EE80B0')),
262=>array('i'=>'��','e'=>makeEzEmoji('EBAE'),'s'=>pack('H*','EE8D82')),
263=>array('i'=>'��','e'=>makeEzEmoji('EBA9'),'s'=>pack('H*','EE8186')),
264=>array('i'=>'��','e'=>makeEzEmoji('ED6A'),'s'=>pack('H*','EE8C8B')),
265=>array('i'=>'��','e'=>makeEzEmoji('ECD1'),'s'=>pack('H*','EE8CBE')),
266=>array('i'=>'��','e'=>makeEzEmoji('ED83'),'s'=>pack('H*','EE8CB9')),
267=>array('i'=>'��','e'=>makeEzEmoji('EE83'),'s'=>""),
268=>array('i'=>'��','e'=>makeEzEmoji('EBB9'),'s'=>pack('H*','EE94A1')),
269=>array('i'=>'��','e'=>makeEzEmoji('EBB5'),'s'=>pack('H*','EE8195')),
270=>array('i'=>'��','e'=>makeEzEmoji('EB72'),'s'=>pack('H*','EE8099')),
271=>array('i'=>'��','e'=>makeEzEmoji('EDA1'),'s'=>""),
272=>array('i'=>'��','e'=>makeEzEmoji('EE85'),'s'=>pack('H*','EE9084')),
273=>array('i'=>'��','e'=>makeEzEmoji('EBB1'),'s'=>pack('H*','EE809A')),
274=>array('i'=>'��','e'=>makeEzEmoji('EBB7'),'s'=>pack('H*','EE848B')),
275=>array('i'=>'��','e'=>makeEzEmoji('EB9A'),'s'=>""),
276=>array('i'=>'��','e'=>makeEzEmoji('ECF5'),'s'=>pack('H*','EE8487')),
	);
}
/**
 * EZWeb絵文字変換関数
 * @param string $code 絵文字を表すコードの文字列
 * @return 絵文字
 */
function makeEzEmoji($code) {
	$emoji = '';
	for ($i = 0; $i < strlen($code); $i += 2) {
		$emoji .= sprintf('%c', hexdec(substr($code, $i, 2)));
	}
	return $emoji;
}
