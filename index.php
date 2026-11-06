<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Anime Academy - ต้านทุจริต ป.6</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap');
*{box-sizing:border-box}
body{margin:0;font-family:Kanit,sans-serif;color:#493b62;background:linear-gradient(145deg,#fff0f6,#eee7ff,#e4f4ff);min-height:100vh}
.container{max-width:850px;margin:auto;padding:15px}
.hero{overflow:hidden;text-align:center;border-radius:28px;padding:24px 15px;color:white;background:linear-gradient(140deg,#ff8dbd,#a78bfa,#78b8ff);box-shadow:0 12px 30px #9b83d455}
.hero h1{font-size:29px;margin:8px 0}
.hero h2{color:white}
.hero p{margin:5px}
.anime{display:flex;justify-content:center;align-items:center;gap:15px;margin:15px auto}
.character{font-size:70px;animation:bounce 2s infinite ease-in-out}
.character:nth-child(2){animation-delay:.4s}
@keyframes bounce{50%{transform:translateY(-9px)}}
.panel{background:#ffffffed;border:2px solid white;border-radius:23px;padding:22px;margin-top:17px;box-shadow:0 8px 25px #8670b522}
h2{color:#9b68c9;margin-top:0}
input{width:100%;padding:13px;border:2px solid #e7d6ff;border-radius:13px;font-family:inherit;font-size:16px;margin:8px 0 15px}
button{border:0;border-radius:15px;padding:13px 19px;font-family:inherit;font-size:16px;font-weight:600;cursor:pointer}
.primary{background:linear-gradient(100deg,#ee8cbe,#a68af5);color:white}
.secondary{background:#f0e7ff;color:#8457bd}
.green{background:#83d9bb;color:#245e50}
.hidden{display:none!important}
.progress{height:13px;background:#eee7f7;border-radius:20px;overflow:hidden;margin:13px 0}
.bar{height:100%;width:0;background:linear-gradient(90deg,#ff9bc8,#a58aff);transition:.3s}
.info{display:flex;justify-content:space-between;font-size:14px}
.question{font-size:20px;line-height:1.6;font-weight:600;margin:17px 0}
.option{display:flex;align-items:center;gap:12px;border:2px solid #eee4f8;background:#fffaff;border-radius:15px;padding:13px;margin:10px 0;cursor:pointer}
.option:hover{background:#fff0f7}
.option.selected{background:#f4eaff;border-color:#a981dc}
.option input{width:19px;height:19px;margin:0;accent-color:#a981dc}
.actions{display:flex;gap:10px;margin-top:20px}
.actions button{flex:1}
.result{text-align:center}
.score{font-size:65px;font-weight:700;color:#aa78d8}
.review{text-align:left;background:#fff5fa;border-radius:14px;padding:13px;margin:10px 0}
.correct{color:#21966c;font-weight:bold}
.wrong{color:#e45b82;font-weight:bold}
footer{text-align:center;padding:20px;color:#9b83a9;font-size:13px}
@media(max-width:480px){.hero h1{font-size:24px}.character{font-size:55px}.question{font-size:18px}}
@media print{body{background:white}.hero,.panel{box-shadow:none}button,.actions{display:none!important}}
</style>
</head>
<body>
<div class="container">

<header class="hero">
 <div>🌸 SAKURA SCHOOL 🌸</div>
 <div class="anime">
  <div class="character">👧🏻</div>
  <div class="character">👦🏻</div>
 </div>
 <h1>ANIME ACADEMY</h1>
 <h2>ภารกิจพิชิตการทุจริต</h2>
 <p>วิชาการป้องกันการทุจริต ชั้นประถมศึกษาปีที่ 6</p>
 <p>⭐ 20 ข้อ | คะแนนเต็ม 20 คะแนน</p>
 <p>ระดับความยาก 50%</p>
</header>

<section class="panel" id="start">
 <h2>🎀 ยินดีต้อนรับนักเรียน</h2>
 <p>ร่วมภารกิจสร้างสังคมแห่งความซื่อสัตย์กันเถอะ!</p>
 <div class="anime">
  <div class="character">👩🏻‍🎓</div>
  <div class="character">👨🏻‍🎓</div>
 </div>
 <label>ชื่อ-นามสกุล</label>
 <input id="student" placeholder="กรอกชื่อและนามสกุล">
 <label>ชั้นเรียน</label>
 <input id="room" value="ป.6">
 <button class="primary" style="width:100%" onclick="startQuiz()">🌸 เริ่มทำข้อสอบ</button>
</section>

<section class="panel hidden" id="quiz">
 <div class="info">
  <b>🌸 ANIME QUIZ</b>
  <b id="count">ข้อ 1 / 20</b>
 </div>
 <div class="progress"><div class="bar" id="bar"></div></div>
 <div class="anime" style="margin:5px">
  <div class="character" style="font-size:45px">👧🏻</div>
  <div style="font-size:13px;color:#a276c9">สู้ ๆ นะ เธอทำได้! ✨</div>
 </div>
 <div class="question" id="question"></div>
 <div id="options"></div>
 <div class="actions">
  <button class="secondary" onclick="previous()">⬅ ก่อนหน้า</button>
  <button class="primary" onclick="nextQuestion()" id="next">ถัดไป ➜</button>
 </div>
</section>

<section class="panel hidden result" id="result">
 <div style="font-size:70px" id="trophy">🏆</div>
 <h2>MISSION COMPLETE!</h2>
 <p id="studentResult"></p>
 <div class="score" id="score">0/20</div>
 <h2 id="grade"></h2>
 <p id="message"></p>
 <div class="anime">
  <div class="character">👧🏻</div>
  <div class="character">👦🏻</div>
 </div>
 <button class="green" onclick="showReview()">📖 ดูเฉลย</button>
 <button class="secondary" onclick="window.print()">🖨 พิมพ์ผลสอบ</button>
 <button class="primary" onclick="location.reload()">🔄 ทำใหม่</button>
 <div id="review"></div>
</section>

<footer>
 🌸 ANIME ACADEMY 🌸
 <br>สื่อการเรียนรู้วิชาการป้องกันการทุจริต
 <br>ผู้จัดทำ: ครูปรเมศวร์ ฟองลม
</footer>
</div>

<script>
const questions=[
["ข้อใดหมายถึงความซื่อสัตย์สุจริต",[
"การพูดความจริงและไม่เอาเปรียบผู้อื่น",
"การทำทุกอย่างตามใจตนเอง",
"การปกปิดความผิดของเพื่อน",
"การนำของผู้อื่นมาใช้โดยไม่ขออนุญาต"],0,
"ความซื่อสัตย์คือการพูดความจริงและประพฤติตนอย่างถูกต้อง"],

["หากนักเรียนเก็บกระเป๋าสตางค์ได้ในโรงเรียน ควรทำอย่างไร",[
"เก็บไว้เป็นของตนเอง",
"นำไปให้ครูเพื่อประกาศหาเจ้าของ",
"แบ่งเงินให้เพื่อน",
"นำไปซ่อนไว้"],1,
"การส่งคืนของที่เก็บได้เป็นการแสดงความซื่อสัตย์"],

["ข้อใดเป็นการใช้ประโยชน์ส่วนรวมอย่างเหมาะสม",[
"นำหนังสือห้องสมุดกลับบ้านโดยไม่แจ้งครู",
"ใช้คอมพิวเตอร์โรงเรียนเพื่อเล่นเกมตลอดวัน",
"ช่วยกันดูแลรักษาอุปกรณ์ของโรงเรียน",
"ขีดเขียนโต๊ะเรียน"],2,
"ทรัพย์สินส่วนรวมเป็นของทุกคน จึงต้องช่วยกันดูแล"],

["หากเพื่อนชวนลอกข้อสอบ นักเรียนควรทำอย่างไร",[
"ลอกเพื่อนเพื่อให้ได้คะแนนดี",
"ช่วยเพื่อนหาคำตอบ",
"ส่งกระดาษคำตอบให้เพื่อน",
"ปฏิเสธและทำข้อสอบด้วยตนเอง"],3,
"การทำข้อสอบด้วยตนเองเป็นการแสดงความซื่อสัตย์"],

["ข้อใดเป็นพฤติกรรมที่แสดงถึงความรับผิดชอบ",[
"ทำหน้าที่เวรประจำวันให้เรียบร้อย",
"หลีกเลี่ยงงานที่ได้รับมอบหมาย",
"ให้เพื่อนทำงานแทนทุกครั้ง",
"ไม่สนใจงานกลุ่ม"],0,
"การทำหน้าที่ที่ได้รับมอบหมายเป็นความรับผิดชอบ"],

["เงินกองกลางห้องเรียนควรนำไปใช้เพื่ออะไร",[
"ซื้อของใช้ส่วนตัวของหัวหน้าห้อง",
"ใช้จ่ายในกิจกรรมส่วนรวมตามที่ตกลงกัน",
"แบ่งให้เพื่อนสนิท",
"นำไปซื้อขนมให้ตนเอง"],1,
"เงินส่วนรวมต้องใช้เพื่อประโยชน์ของสมาชิกทุกคน"],

["การให้ของขวัญเพื่อแลกกับการลงคะแนนเลือกหัวหน้าห้องเรียกว่าอะไร",[
"การแบ่งปัน",
"การช่วยเหลือ",
"การซื้อเสียง",
"การทำความดี"],2,
"การให้สิ่งของเพื่อแลกคะแนนเป็นการซื้อเสียง"],

["หากพบว่าเพื่อนนำเงินห้องไปใช้ส่วนตัว ควรทำอย่างไร",[
"ช่วยเพื่อนปกปิด",
"นำเงินไปใช้ด้วย",
"ไม่สนใจ",
"แจ้งครูหรือผู้รับผิดชอบเพื่อแก้ไข"],3,
"ควรแจ้งผู้รับผิดชอบและตรวจสอบการใช้เงิน"],

["ข้อใดแสดงถึงความโปร่งใส",[
"เปิดเผยรายรับรายจ่ายให้ตรวจสอบได้",
"ปกปิดข้อมูลการใช้เงิน",
"ไม่บันทึกการใช้จ่าย",
"ให้เพื่อนสนิทตรวจสอบเพียงคนเดียว"],0,
"ความโปร่งใสคือการเปิดเผยข้อมูลและตรวจสอบได้"],

["การเลือกเพื่อนสนิทให้ได้รับสิทธิพิเศษโดยไม่ยึดกติกาเป็นอย่างไร",[
"การแบ่งปัน",
"การเลือกปฏิบัติ",
"การเสียสละ",
"การมีวินัย"],1,
"การเลือกปฏิบัติทำให้เกิดความไม่เป็นธรรม"],

["ข้อใดเป็นผลเสียของการทุจริต",[
"สังคมมีความสามัคคีมากขึ้น",
"ทุกคนได้รับประโยชน์เท่ากัน",
"เกิดความไม่เป็นธรรมและสูญเสียความเชื่อมั่น",
"โรงเรียนมีเงินเพิ่มขึ้น"],2,
"การทุจริตทำให้สังคมขาดความเป็นธรรม"],

["นักเรียนพบว่ามีการใช้เงินกิจกรรมไม่ตรงตามวัตถุประสงค์ ควรทำอย่างไร",[
"เผยแพร่ข่าวลือ",
"กล่าวหาผู้เกี่ยวข้องทันที",
"ไม่สนใจ",
"แจ้งครูพร้อมข้อมูลที่ตรวจสอบได้"],3,
"ควรแจ้งปัญหาด้วยข้อมูลที่เป็นจริงและเหมาะสม"],

["ข้อใดเป็นการต่อต้านการทุจริต",[
"ไม่สนับสนุนการโกงและแจ้งเมื่อพบการกระทำผิด",
"ช่วยเพื่อนปกปิดความผิด",
"รับเงินเพื่อช่วยเหลือการโกง",
"เพิกเฉยต่อการเอาเปรียบผู้อื่น"],0,
"การไม่สนับสนุนการโกงเป็นการต่อต้านการทุจริต"],

["การนำเงินโรงเรียนไปซื้อของใช้ส่วนตัวโดยไม่ได้รับอนุญาตเป็นการกระทำแบบใด",[
"การประหยัด",
"การใช้ทรัพย์สินส่วนรวมเพื่อประโยชน์ส่วนตน",
"การช่วยเหลือโรงเรียน",
"การแบ่งปัน"],1,
"การนำเงินส่วนรวมไปใช้ส่วนตัวโดยมิชอบเป็นพฤติกรรมไม่สุจริต"],

["หากเพื่อนทำอุปกรณ์โรงเรียนเสียหาย ควรแนะนำอย่างไร",[
"ให้ปกปิดเรื่องไว้",
"ให้โยนความผิดให้คนอื่น",
"ให้แจ้งครูและรับผิดชอบต่อความเสียหาย",
"ให้นำอุปกรณ์ชิ้นอื่นมาซ่อน"],2,
"การยอมรับความจริงและรับผิดชอบเป็นสิ่งที่ถูกต้อง"],

["ข้อใดแสดงถึงการมีจิตสาธารณะ",[
"ช่วยเฉพาะคนที่ให้รางวัล",
"เก็บของส่วนรวมไว้คนเดียว",
"ไม่ช่วยกิจกรรมโรงเรียน",
"อาสาช่วยทำความสะอาดโรงเรียน"],3,
"จิตสาธารณะคือการคำนึงถึงประโยชน์ส่วนรวม"],

["หากได้รับข้อมูลว่ามีการทุจริต แต่ยังไม่มีหลักฐานชัดเจน ควรทำอย่างไร",[
"ตรวจสอบข้อเท็จจริงก่อนแจ้งผู้รับผิดชอบ",
"เผยแพร่ข่าวทันที",
"กล่าวหาผู้เกี่ยวข้อง",
"แต่งเติมข้อมูลให้เรื่องน่าสนใจ"],0,
"ต้องตรวจสอบข้อเท็จจริงและไม่กล่าวหาผู้อื่นโดยไม่มีหลักฐาน"],

["ข้อใดสอดคล้องกับหลักความพอเพียง",[
"ซื้อของเกินความจำเป็น",
"ใช้จ่ายอย่างพอประมาณและไม่เอาเปรียบผู้อื่น",
"ต้องการผลประโยชน์มากที่สุด",
"ใช้เงินส่วนรวมตามใจตนเอง"],1,
"ความพอเพียงช่วยให้รู้จักประมาณตนและไม่โลภ"],

["การเลือกตั้งหัวหน้าห้องที่ดีควรยึดหลักใด",[
"เลือกคนที่แจกขนม",
"เลือกเพื่อนสนิทเท่านั้น",
"เลือกจากความสามารถและความเหมาะสม",
"เลือกตามคำสั่งของเพื่อน"],2,
"การเลือกตั้งควรใช้เหตุผลและความสามารถ ไม่ใช่ผลประโยชน์"],

["ข้อใดเป็นลักษณะของพลเมืองดีที่ต่อต้านการทุจริต",[
"ทำตามผู้อื่นแม้รู้ว่าผิด",
"เห็นการโกงแต่ไม่สนใจ",
"เอาเปรียบคนอื่นเมื่อมีโอกาส",
"ซื่อสัตย์ มีวินัย กล้าปฏิเสธการโกงและรับผิดชอบต่อส่วนรวม"],3,
"พลเมืองดีต้องยึดมั่นความถูกต้องและประโยชน์ส่วนรวม"]
];

let current=0;
let answers=Array(20).fill(null);
let name="",room="";

function startQuiz(){
 name=document.getElementById("student").value.trim();
 room=document.getElementById("room").value.trim();
 if(!name){alert("กรุณากรอกชื่อก่อนเริ่มทำข้อสอบ");return}
 document.getElementById("start").classList.add("hidden");
 document.getElementById("quiz").classList.remove("hidden");
 render();
}
function render(){
 let q=questions[current];
 document.getElementById("count").textContent=`ข้อ ${current+1} / 20`;
 document.getElementById("bar").style.width=((current+1)*5)+"%";
 document.getElementById("question").textContent=`ข้อ ${current+1}. ${q[0]}`;
 document.getElementById("options").innerHTML=q[1].map((v,i)=>`
 <label class="option ${answers[current]===i?'selected':''}">
 <input type="radio" name="answer" ${answers[current]===i?'checked':''} onchange="selectAnswer(${i})">
 <span>${["ก","ข","ค","ง"][i]}. ${v}</span>
 </label>`).join("");
 document.getElementById("next").textContent=current===19?"ส่งคำตอบ 🏆":"ถัดไป ➜";
}
function selectAnswer(i){answers[current]=i;render()}
function previous(){if(current>0){current--;render()}}
function nextQuestion(){
 if(answers[current]===null){alert("กรุณาเลือกคำตอบก่อน");return}
 if(current<19){current++;render();return}
 if(answers.includes(null)){alert("กรุณาตอบให้ครบทุกข้อ");return}
 if(confirm("ยืนยันส่งคำตอบหรือไม่?"))finish();
}
function finish(){
 let score=questions.reduce((s,q,i)=>s+(answers[i]===q[2]?1:0),0);
 document.getElementById("quiz").classList.add("hidden");
 document.getElementById("result").classList.remove("hidden");
 document.getElementById("studentResult").textContent=`${name} | ชั้น ${room}`;
 document.getElementById("score").textContent=score+"/20";
 document.getElementById("grade").textContent=
 score>=18?"ดีเยี่ยม 🌟":score>=15?"ดี 😊":score>=12?"พอใช้ 🌸":"ควรปรับปรุง 💪";
 document.getElementById("message").textContent=
 score>=18?"สุดยอด! เธอคือฮีโร่แห่งความซื่อสัตย์":
 score>=15?"เก่งมาก! รักษาความดีต่อไป":
 score>=12?"ทำได้ดี ลองทบทวนอีกนิดนะ":
 "ไม่เป็นไร! ฝึกฝนอีกครั้งแล้วจะเก่งขึ้น";
 document.getElementById("trophy").textContent=score>=15?"🏆":"🌱";
}
function showReview(){
 let html="<h2>🌸 เฉลยภารกิจ</h2>";
 questions.forEach((q,i)=>{
 let ok=answers[i]===q[2];
 html+=`<div class="review">
 <b>ข้อ ${i+1}. ${q[0]}</b><br>
 <span class="${ok?'correct':'wrong'}">${ok?'✓ ตอบถูก':'✗ ตอบผิด'}</span><br>
 คำตอบ: <b>${["ก","ข","ค","ง"][q[2]]}. ${q[1][q[2]]}</b><br>
 <small>${q[3]}</small></div>`;
 });
 document.getElementById("review").innerHTML=html;
 document.getElementById("review").scrollIntoView({behavior:"smooth"});
}
</script>
</body>
</html>
