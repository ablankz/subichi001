import React from 'react';
import ReactDOM from 'react-dom';
import { makeStyles } from '@material-ui/core/styles';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import ListItemText from '@mui/material/ListItemText';
import Divider from '@mui/material/Divider';

const useStyles=makeStyles({
    title:{
      fontSize:'1.2rem',
      fontWeight:'bold',
      margin:'0 auto',
    },
});

const style = {
      width: '100%',
      maxWidth: 360,
      bgcolor: 'background.paper',   
}

const Items = [
    {
        primary:'公式ショップから探す',
        link:'/',
    },
    {
        primary:'お店から探す',
        link:'/',
    },
    {
        primary:'ランキングから探す',
        link:'/',
    },
    {
        primary:'セールス対象から探す',
        link:'/',
    },
    {
        primary:'クーポン対象から探す',
        link:'/',
    },
    
    ];
const Categories = [
    {
        primary:'音楽',
        link:'/',
    },
    {
        primary:'ドラマ・映画・アニメ',
        link:'/',
    },
    {
        primary:'漫画・小説・ビジネス書',
        link:'/',
    },
    {
        primary:'雑誌',
        link:'/',
    },
    {
        primary:'ソフトウェア',
        link:'/',
    },
    {
        primary:'ゲーム',
        link:'/',
    },
    {
        primary:'恋愛・婚活',
        link:'/',
    },
    {
        primary:'コスメ',
        link:'/',
    },
    {
        primary:'バック',
        link:'/',
    },
    {
        primary:'アクセサリー',
        link:'/',
    },
    
    ];


export default function ListDividers() {
    const classes=useStyles();
    return (
        <>
        <h3 className={classes.title}>探す<span className="badge badge-primary badge-pill">8</span></h3>
        <List sx={style} component="nav" aria-label="mailbox folders">
        {Items.map((item,i)=>(
        <div key={i}>
            <ListItem button>
                <ListItemText primary={item.primary} />
            </ListItem>
            <Divider />
        </div>
        ))}
        </List>
        <br />
        <h3 className={classes.title}>カテゴリーから探す<span className="badge badge-primary badge-pill">3</span></h3>
        <List sx={style} component="nav" aria-label="mailbox folders">
        {Categories.map((item,i)=>(
        <div key={i}>
            <ListItem button>
                <ListItemText primary={item.primary} />
            </ListItem>
            <Divider />
        </div>
        ))}
        </List>
        </>
      );
}