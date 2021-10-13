import React from 'react';
import ReactDOM from 'react-dom';

import { makeStyles } from '@material-ui/core/styles';

const useStyles=makeStyles({
   whole:{
       width:'100%',
       height:'40rem',
       display:'flex',
       flexDirection:'column',
       alignItems:'center',
       backgroundColor:'#EFECFE',
       justifyContent:'center',
   },
   packageTitle:{
       fontWeight:'bold',
       fontSize:'1.5rem',
   },
   packageSpan:{
        color:'orange',
        fontWeight:'bold',
   },
   carenderImg:{
       height:'14rem',
       backgroundColor: '#FAE5DF',
       backgroundImage:`url(${'images/base/carender2.png'})`,
       backgroundSize:'cover',
       width:'90%',
       borderRadius:'8px',
       display:'flex',
       flexDirection:'column',
       justifyContent:'center',
       alignItems:'center',
       '& h2':{
            color:'#359A86',
            fontWeight:'bold',
            fontSize:'2.4rem',
       },
       '& p':{
           color:'#259A26',
           fontWeight:'bold',
           width:'70%',
           fontSize:'1.2rem',
       },
   },
   pack:{
       width:'80%',
   },
});

const Carender_package:React.FC=()=>{
    const classes=useStyles();
    
    return (
        <div className={classes.whole}>
            <div className={classes.carenderImg}>
                <h2>さぶイチカレンダー</h2>
                <p>さぶイチでは、プレミアム会員の方や1000円でのカレンダー買い切りプランを購入していただいた方には、サブスクリプションのカレンダーのサービスを提供しています。</p><br />
                <p>それぞれのプランの概要については以下のリンクからアクセスしてください。</p>
            </div>
            <br />
            <div className={'card'+' '+'text-center'+' '+`${classes.pack}`}>
              <div className={'card-header'+' '+`${classes.packageTitle}`}>
                さぶイチカレンダーパッケージ
              </div>
              <div className="card-body">
                <h5 className="card-title">さぶイチにて<span className={classes.packageSpan}>カレンダー</span>が利用可能に！</h5>
                <p className="card-text">さぶイチカレンダーを使って、より分かりやすくサブスクリプションをまとめてより快適にさぶイチを使いこなそう！</p>
                <a href="#" className="btn btn-primary">買い切りプラン ¥1000</a>
              </div>
              <div className="card-footer text-muted">
                プレミアム会員では、カレンダーに加えてさらに、便利な機能もすべて付属！<br />プレミアム会員(の概要)はこちらから↓↓↓<br /><br />
                <a href="#" className="btn btn-primary">プレミアム会員 月額プラン ¥200/月</a>
              </div>
            </div>
        </div>
    );
}
export default Carender_package;