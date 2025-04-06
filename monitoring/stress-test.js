import http from 'k6/http';
import { sleep, check } from 'k6';

export const options = {
  vus: 300,           // 300 usuários virtuais simultâneos
  duration: '180s',   // durante 180 segundos
};

export default function () {
  const res = http.get('http://54.152.186.27/');
  check(res, {
    'status is 200': (r) => r.status === 200,
  });
  sleep(1);
}

