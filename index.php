
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Anime Academy ป.6 | ต้านทุจริต</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap');
*{box-sizing:border-box}
body{margin:0;font-family:Kanit,sans-serif;color:#493b62;background:linear-gradient(145deg,#fff0f6,#eee7ff,#e4f4ff);min-height:100vh}
.container{max-width:850px;margin:auto;padding:15px}
.hero{position:relative;overflow:hidden;text-align:center;border-radius:28px;padding:24px 15px;color:white;background:linear-gradient(140deg,#ff8dbd,#a78bfa,#78b8ff);box-shadow:0 12px 30px #9b83d455}
.hero h1{font-size:29px;margin:8px 0}
.hero h2{color:white}
.hero p{margin:5px}
.anime{display:flex;justify-content:center;align-items:center;gap:15px;margin:15px auto}
.character{font-size:76px;animation:bounce 2s infinite ease-in-out}
.character:nth-child(2){animation-delay:.4s}
@keyframes bounce{50%{transform:translateY(-9px)}}
.panel{background:#ffffffed;border:2px solid white;border-radius:23px;padding:22px;margin-top:17px;box-shadow:0 8px 25px #8670b522}
h2{color:#9b68c9;margin-top:0}
input{width:100%;padding:13px;border:2px solid #e7d6ff;border-radius:13px;font-family:inherit;font-size:16px;margin:8px 0 15px;outline:none}
button{border:0;border-radius:15px;padding:13px 19px;font-family:inherit;font-size:16px;font-weight:600;cursor:pointer;transition:.2s}
button:hover{filter:brightness(1.04);transform:translateY(-2px)}
.primary{background:linear-gradient(100deg,#ee8cbe,#a68af5);color:white}
.secondary{background:#f0e7ff;color:#8457bd}
.green{background:#83d9bb;color:#245e50}
.hidden{display:none!important}
.progress{height:13px;background:#eee7f7;border-radius:20px;overflow:hidden;margin:13px 0}
.bar{height:100%;width:0;background:linear-gradient(90deg,#ff9bc8,#a58aff);transition:.3s}
.info{display:flex;justify-content:space-between;gap:8px;font-size:14px}
.question{font-size:20px;line-height:1.6;font-weight:600;margin:17px 0}
.option{display:flex;align-items:center;gap:12px;border:2px solid #eee4f8;background:#fffaff;border-radius:15px;padding:13px;margin:10px 0;cursor:pointer;transition:.2s}
.option:hover{background:#fff0f7;border-color:#edacd0}
.option.selected{background:#f4eaff;border-color:#a981dc}
.option input{width:19px;height:19px;margin:0;accent-color:#a981dc}
.actions{display:flex;gap:10px;margin-top:20px}
.actions button{flex:1}
.result{text-align:center}
.score{font-size:65px;font-weight:700;color:#aa78d8}
.review{ text-align:left;background:#fff5fa;border-radius:14px;padding:13px;margin:10px 0}
.correct{color:#21966c;font-weight:bold}
.wrong{color:#e45b82;font-weight:bold}
footer{text-align:center;padding:20px;color:#9b83a9;font-size:13px}
@media(max-width:480px){.hero h1{font-size:24px}.character{font-size:60px}.question{font-size:18px}button{font-size:14px}}
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
 <p>⭐ 20 QUESTIONS • 20 POINTS ⭐</p>
 <p>ระดับความยาก 70%</p>
</header>

<section class="panel" id="start">
 <h2>🎀 ยินดีต้อนรับเข้าสู่โรงเรียนอนิเมะ</h2>
 <p>พร้อมหรือยัง? มาร่วมภารกิจเป็นฮีโร่แห่งความซื่อสัตย์กัน!</p>
 <div class="anime">
  <div class="character">👩🏻‍🎓</div>
  <div class="character">👨🏻‍🎓</div>
 </div>
 <label>ชื่อ-นามสกุลนักเรียน</label>
 <input id="student" placeholder="กรอกชื่อและนามสกุล">
 <label>ชั้นเรียน</label>
 <input id="room" value="ป.6">
 <button class="primary" style="width:100%" onclick="startQuiz()">🌸 เริ่มภารกิจ</button>
</section>

<section class="panel hidden" id="quiz">
 <div class="info">
  <b>🌸 ANIME QUIZ</b>
  <b id="count">ข้อ 1 / 20</b>
 </div>
 <div class="progress"><div class="bar" id="bar"></div></div>
 <div class="anime" style="margin:5px">
  <div class="character" style="font-size:48px">👧🏻</div>
  <div style="font-size:13px;color:#a276c9">สู้ ๆ นะ! เธอทำได้ ✨</div>
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
 <button class="primary" onclick="location.reload()">🔄 เริ่มใหม่</button>
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
["ข้อใดอธิบายความหมายของการทุจริตได้ถูกต้องที่สุด",["การใช้ทรัพย์สินส่วนรวมเพื่อประโยชน์ของทุกคน","การใช้อำนาจหรือหน้าที่โดยมิชอบเพื่อประโยชน์ส่วนตนหรือพวกพ้อง","การปฏิบัติตามกฎระเบียบของหน่วยงาน","การช่วยเหลือผู้ที่ได้รับความเดือดร้อน"],1,"การทุจริตคือการใช้อำนาจหรือหน้าที่โดยมิชอบเพื่อแสวงหาประโยชน์ที่ไม่ควรได้"],
["ครูได้รับมอบหมายให้จัดซื้ออุปกรณ์การเรียน แต่เลือกซื้อจากร้านของญาติโดยไม่เปรียบเทียบราคาและคุณภาพ พฤติกรรมนี้เสี่ยงต่อเรื่องใด",["การประหยัดงบประมาณ","การส่งเสริมธุรกิจในชุมชน","การมีผลประโยชน์ทับซ้อน","การกระจายรายได้"],2,"การตัดสินใจที่เกี่ยวข้องกับผลประโยชน์ของตนเองหรือญาติอาจเป็นผลประโยชน์ทับซ้อน"],
["หากพบว่าเพื่อนนำเงินกองกลางห้องเรียนไปใช้ส่วนตัวโดยไม่ขออนุญาต ควรทำอย่างไร",["เพิกเฉยเพราะเป็นเรื่องของเพื่อน","ช่วยเพื่อนปกปิดเรื่องที่เกิดขึ้น","นำเงินไปใช้บ้างเพื่อความเท่าเทียม","แจ้งครูและให้เพื่อนรับผิดชอบต่อการกระทำ"],3,"การแจ้งผู้รับผิดชอบและแก้ไขปัญหาเป็นการป้องกันการทุจริต"],
["ข้อใดเป็นตัวอย่างของการมีจิตสาธารณะ",["อาสาทำความสะอาดโรงเรียนโดยไม่หวังผลตอบแทน","ทำงานเฉพาะเมื่อได้รับรางวัล","ใช้ของส่วนรวมเพื่อประโยชน์ส่วนตัว","ช่วยเหลือเฉพาะเพื่อนสนิท"],0,"จิตสาธารณะคือการคำนึงถึงประโยชน์ส่วนรวมและพร้อมช่วยเหลือสังคม"],
["นักเรียนได้รับเลือกเป็นเหรัญญิกห้องเรียน ควรปฏิบัติอย่างไรจึงจะโปร่งใสที่สุด",["เก็บเงินไว้กับตนเองโดยไม่ต้องแจ้งใคร","บันทึกรายรับรายจ่ายและเปิดเผยให้สมาชิกตรวจสอบ","ใช้เงินก่อนแล้วค่อยแจ้งยอดภายหลัง","ให้เพื่อนสนิทเป็นผู้ตรวจสอบเพียงคนเดียว"],1,"การจัดทำบัญชีและเปิดเผยข้อมูลทำให้ตรวจสอบได้"],
["ข้อใดเป็นการแยกแยะประโยชน์ส่วนตนกับประโยชน์ส่วนรวมได้ถูกต้อง",["นำอุปกรณ์โรงเรียนกลับบ้านเพราะตนเองจำเป็นต้องใช้","ใช้เงินส่วนรวมซื้อสิ่งของที่ตนเองต้องการ","ใช้คอมพิวเตอร์โรงเรียนเพื่อประโยชน์ในการเรียนตามระเบียบ","นำหนังสือห้องสมุดไปเก็บไว้ที่บ้านโดยไม่แจ้งครู"],2,"การใช้ทรัพย์สินส่วนรวมตามวัตถุประสงค์และกฎระเบียบเป็นการใช้ประโยชน์อย่างเหมาะสม"],
["หากมีผู้เสนอเงินให้นักเรียนเพื่อให้ช่วยลงคะแนนเลือกหัวหน้าห้อง นักเรียนควรทำอย่างไร",["รับเงินแล้วลงคะแนนตามที่ต้องการ","รับเงินแต่ไม่ลงคะแนนให้","แบ่งเงินให้เพื่อนในห้อง","ปฏิเสธเงินและลงคะแนนตามความเหมาะสม"],3,"การซื้อเสียงเป็นพฤติกรรมไม่สุจริต การเลือกควรใช้เหตุผลและความเหมาะสม"],
["ข้อใดแสดงถึงหลักความโปร่งใสในการทำงาน",["เปิดเผยข้อมูลและขั้นตอนการดำเนินงานให้ตรวจสอบได้","เก็บข้อมูลทั้งหมดไว้ไม่ให้ผู้อื่นทราบ","เลือกปฏิบัติต่อบุคคลที่สนิทสนม","ตัดสินใจโดยไม่แจ้งเหตุผล"],0,"ความโปร่งใสต้องเปิดเผยข้อมูลและสามารถตรวจสอบได้"],
["นักเรียนพบว่าการเลือกตั้งประธานนักเรียนมีการแจกของเพื่อแลกคะแนน ควรดำเนินการอย่างไร",["รับของไว้แต่ไม่ต้องเลือก","แจ้งครูหรือคณะกรรมการเลือกตั้งพร้อมข้อมูลที่พบ","ชวนเพื่อนแจกของแข่งกัน","ไม่สนใจเพราะเป็นเรื่องปกติ"],1,"ควรแจ้งผู้รับผิดชอบเพื่อให้ตรวจสอบอย่างเป็นธรรม"],
["ข้อใดเป็นผลเสียที่สำคัญของการทุจริตต่อสังคม",["ทำให้ทุกคนมีรายได้เท่าเทียมกัน","ทำให้การทำงานรวดเร็วขึ้นเสมอ","ทำให้เกิดความไม่เป็นธรรมและสูญเสียความเชื่อมั่น","ทำให้ประชาชนมีส่วนร่วมมากขึ้น"],2,"การทุจริตทำลายความเชื่อมั่นและทำให้สังคมขาดความเป็นธรรม"],
["หากได้รับมอบหมายให้จัดทำรายงานกลุ่ม สมาชิกคนหนึ่งไม่ทำงานแต่ขอให้ใส่ชื่อร่วมด้วย ควรทำอย่างไร",["ใส่ชื่อให้เพื่อรักษาความสัมพันธ์","ไม่ต้องส่งรายงาน","ให้คะแนนเต็มทุกคนเท่ากัน","พูดคุยให้สมาชิกทำหน้าที่และบันทึกการมีส่วนร่วมตามจริง"],3,"ความรับผิดชอบและความเป็นธรรมต้องสะท้อนการทำงานจริง"],
["การนำข้อมูลเท็จมาใช้เบิกค่าใช้จ่ายของกิจกรรมโรงเรียนถือเป็นการกระทำแบบใด",["การทุจริตและขาดความซื่อสัตย์","การประหยัดงบประมาณ","การบริหารจัดการที่ดี","การสร้างความสามัคคี"],0,"การใช้ข้อมูลเท็จเพื่อเบิกเงินเป็นการแสวงหาประโยชน์โดยไม่สุจริต"],
["ข้อใดเป็นแนวทางป้องกันการทุจริตที่เหมาะสมที่สุด",["ให้ผู้มีอำนาจตัดสินใจเพียงคนเดียว","สร้างระบบตรวจสอบ เปิดเผยข้อมูล และมีส่วนร่วม","ไม่ต้องบันทึกหลักฐานการใช้เงิน","อนุญาตให้ผู้เกี่ยวข้องเลือกตรวจสอบตนเอง"],1,"การตรวจสอบและการมีส่วนร่วมช่วยลดโอกาสเกิดการทุจริต"],
["นักเรียนพบว่ามีการนำงบประมาณอาหารกลางวันไปใช้ผิดวัตถุประสงค์ ควรทำอย่างไร",["เผยแพร่ข่าวลือโดยไม่มีหลักฐาน","เข้าไปกล่าวหาผู้เกี่ยวข้องทันที","รวบรวมข้อมูลที่เชื่อถือได้และแจ้งผู้รับผิดชอบ","ไม่สนใจเพราะไม่ใช่หน้าที่นักเรียน"],2,"ควรใช้ข้อมูลที่ถูกต้องและแจ้งผ่านช่องทางที่เหมาะสม"],
["ข้อใดเป็นพฤติกรรมที่สอดคล้องกับหลักพอเพียงเพื่อต่อต้านการทุจริต",["ต้องการสิ่งของมากกว่าความจำเป็น","ใช้เงินส่วนรวมเพื่อซื้อของที่ตนชอบ","แสวงหาผลประโยชน์จากผู้อื่น","รู้จักพอประมาณ ไม่โลภ และไม่เอาเปรียบผู้อื่น"],3,"ความพอประมาณและไม่โลภช่วยลดแรงจูงใจในการแสวงหาผลประโยชน์ที่ไม่ถูกต้อง"],
["หากเพื่อนขอให้ช่วยแก้ไขตัวเลขในบัญชีเงินห้องเพื่อปกปิดเงินที่หายไป นักเรียนควรทำอย่างไร",["ปฏิเสธและเสนอให้ตรวจสอบบัญชีตามความจริง","ช่วยแก้ไขเพื่อรักษามิตรภาพ","ลบข้อมูลเดิมทั้งหมด","แบ่งเงินที่เหลือให้เพื่อน"],0,"การบันทึกข้อมูลตามความจริงและตรวจสอบเป็นหลักสำคัญของความสุจริต"],
["ข้อใดเป็นความหมายของการมีส่วนร่วมในการป้องกันการทุจริต",["ปล่อยให้ผู้บริหารจัดการทุกอย่างเพียงฝ่ายเดียว","ร่วมแสดงความคิดเห็น เฝ้าระวัง และแจ้งเบาะแสอย่างเหมาะสม","ปกปิดข้อมูลที่พบเห็น","สนับสนุนคนที่ให้ผลประโยชน์แก่ตน"],1,"ทุกคนสามารถมีส่วนร่วมในการเฝ้าระวังและป้องกันการทุจริต"],
["หัวหน้าห้องเลือกเพื่อนสนิทให้ได้รับสิทธิพิเศษโดยไม่คำนึงถึงกติกา เป็นพฤติกรรมใด",["การบริหารงานอย่างมีประสิทธิภาพ","การส่งเสริมความสามัคคี","การเลือกปฏิบัติและขาดความเป็นธรรม","การแบ่งหน้าที่อย่างเหมาะสม"],2,"การให้สิทธิพิเศษแก่คนสนิทโดยไม่เป็นธรรมเป็นการเลือกปฏิบัติ"],
["หากนักเรียนได้รับข้อมูลว่ามีการทุจริต แต่ยังไม่มีหลักฐานชัดเจน ควรทำอย่างไร",["แชร์ข้อมูลต่อทันที","กล่าวหาผู้เกี่ยวข้องต่อสาธารณะ","แต่งเติมข้อมูลให้เรื่องน่าสนใจ","ตรวจสอบข้อเท็จจริงและแจ้งผู้รับผิดชอบโดยไม่ด่วนตัดสิน"],3,"การตรวจสอบข้อเท็จจริงช่วยป้องกันการกล่าวหาผู้อื่นอย่างไม่เป็นธรรม"],
["ข้อใดสะท้อนการเป็นพลเมืองที่เข้มแข็งในการต่อต้านการทุจริตได้ดีที่สุด",["ยึดมั่นความถูกต้อง กล้าปฏิเสธการทุจริต และรับผิดชอบต่อส่วนรวม","ทำตามคนส่วนใหญ่แม้รู้ว่าไม่ถูกต้อง","เลือกช่วยเหลือเฉพาะคนที่ให้ผลตอบแทน","เพิกเฉยต่อการทุจริตเพื่อหลีกเลี่ยงปัญหา"],0,"พลเมืองที่เข้มแข็งต้องยึดมั่นความถูกต้องและไม่สนับสนุนการทุจริต"]
];

let current=0;
let answers=Array(20).fill(null);
let name="",room="";

function startQuiz(){
 name=document.getElementById("student").value.trim();
 room=document.getElementById("room").value.trim();
 if(!name){alert("กรุณากรอกชื่อก่อนเริ่มภารกิจ");return}
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
 document.getElementById("grade").textContent=score>=18?"ดีเยี่ยม 🌟":score>=15?"ดี 😊":score>=12?"พอใช้ 🌸":"ควรปรับปรุง 💪";
 document.getElementById("message").textContent=score>=18?"สุดยอด! เธอคือฮีโร่แห่งความซื่อสัตย์":score>=15?"เก่งมาก! รักษาความดีต่อไป":score>=12?"ทำได้ดี ลองทบทวนอีกนิดนะ":"ไม่เป็นไร! ฝึกฝนอีกครั้งแล้วจะเก่งขึ้น";
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
