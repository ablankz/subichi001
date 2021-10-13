import * as React from 'react';
import Button from '@mui/material/Button';
import ButtonGroup from '@mui/material/ButtonGroup';
import Box from '@mui/material/Box';

export default function VariantButtonGroup() {
  return (
    <Box
      sx={{
        display: 'flex',
        flexDirection: 'column',
        alignItems: 'center',
        '& > *': {
          m: 1,
        },
      }}
    >
      <ButtonGroup variant="text" aria-label="text button group">
        <Button>サイトマップ</Button>
        <Button>プライバシーポリシー</Button>
        <Button>サイトご利用規約</Button>
        <Button>お問い合わせ</Button>
        <Button>公式ショップ</Button>
      </ButtonGroup>
    </Box>
  );
}