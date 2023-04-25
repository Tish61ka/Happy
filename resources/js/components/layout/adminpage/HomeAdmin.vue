<template>
  <div class="topbar">
    <div class="toggle">
      <svg
        width="38"
        height="24"
        viewBox="0 0 38 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <rect width="38" height="5" rx="2.5" fill="black" />
        <rect y="19" width="38" height="5" rx="2.5" fill="black" />
        <rect y="9" width="38" height="5" rx="2.5" fill="black" />
      </svg>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div>
        <div class="numbers">{{ products.length }}</div>
        <div class="cardName">Видов мороженного</div>
      </div>
      <div class="iconBx">
        <svg
          width="130"
          height="126"
          viewBox="0 0 130 126"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M70.0066 49.2226L68.7238 44.8327L65.8393 40.194L65.3122 39.5907C64.0842 38.1886 63.1409 37.3482 62.0471 36.8374C60.9067 36.3058 59.3884 36.0217 57.0528 35.7507L54.0163 35.5526C52.3776 35.6803 48.699 36.7605 45.7364 39.1138C44.6042 40.0128 43.6048 41.0957 42.9217 42.3713C42.2563 43.6144 41.8812 45.0659 41.9661 46.7429C42.129 49.9314 43.9033 53.9604 48.3143 58.9926L48.3786 59.0656L87.804 59.1073C94.4685 52.7668 96.0374 45.939 94.4959 40.6982C93.8647 38.5548 92.7161 36.6797 91.1924 35.2308C89.7001 33.8105 87.8396 32.7941 85.7532 32.3355C81.3244 31.3608 75.8072 32.8801 70.394 38.2525L73.3128 42.9459L74.7804 47.9665L70.0066 49.2226ZM64.2197 32.6078C65.3163 33.1199 66.2596 33.7597 67.2056 34.6105C71.5988 30.3796 76.1714 28.1801 80.4619 27.5391C79.5351 23.8372 76.7381 21.5569 73.3265 20.551C71.2894 19.9503 69.0277 19.777 66.7825 20.0037C64.5223 20.2317 62.3031 20.8624 60.3659 21.8618V21.8722C56.8885 23.6678 54.3065 26.7143 54.1258 30.8292C55.2868 30.9087 56.4505 30.9699 57.61 31.0572C60.485 31.3895 62.4523 31.7843 64.2197 32.6078ZM42.5548 35.494C44.6234 33.8522 47.0329 32.6834 49.174 31.9263C48.851 25.3018 52.6842 20.4611 57.9975 17.7156L58.0016 17.7234C60.5261 16.4204 63.3805 15.6047 66.2568 15.3128C69.151 15.021 72.0957 15.2516 74.7818 16.0438C80.1511 17.627 84.4814 21.3562 85.5109 27.4961C85.9668 27.5586 86.4158 27.6381 86.8594 27.7358C89.8754 28.3991 92.5587 29.8623 94.7039 31.9055C96.8191 33.9199 98.4072 36.4973 99.2683 39.4252C101.275 46.2452 99.3614 54.9897 90.9295 62.7987C88.3174 69.4532 85.708 76.0308 83.0056 82.6502L82.9864 82.7153L76.9558 96.3918L74.0713 103.351L71.1634 110.936L63.913 110.67L58.8326 97.1319C54.2846 86.958 52.3954 82.4404 48.8879 72.1648L44.2825 61.7576C39.265 55.9592 37.2265 51.0481 37.0184 46.9631C36.887 44.3897 37.4675 42.1524 38.4983 40.2305C39.5087 38.3398 40.9462 36.7722 42.5548 35.494ZM50.5444 63.7773L53.5905 70.6702L57.4759 82.0521L63.5092 95.5448L67.4643 106.085L67.745 106.095C71.0389 97.5007 74.6791 89.3412 78.407 80.8872L78.4125 80.8885L81.8857 72.3772L85.248 63.8138L50.5444 63.7773Z"
            fill="#9C96A9"
          />
        </svg>
      </div>
    </div>
    <div class="card">
      <div>
        <div class="numbers">85</div>
        <div class="cardName">Пользователей</div>
      </div>
      <div class="iconBx">
        <svg
          width="96"
          height="96"
          viewBox="0 0 96 96"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M25.1843 24.4131C28.7605 24.4131 32.0034 25.8349 34.3562 28.131C36.726 30.443 38.192 33.6371 38.192 37.1623C38.192 40.6863 36.726 43.8804 34.3562 46.1935C33.3527 47.1721 32.1882 47.9918 30.9035 48.6098L31.4138 48.7357L31.5181 48.7742C32.6939 49.2073 33.6713 49.662 34.5977 50.1723C35.5161 50.678 36.3484 51.2143 37.26 51.8311L37.3961 51.9332C38.2816 52.6373 38.9449 53.2666 39.4971 53.9775C40.0754 54.7202 40.5029 55.5071 40.8952 56.4992C41.1571 57.0957 41.3725 57.6785 41.5517 58.2601C42.003 57.0265 42.198 56.76 42.9588 55.7135L43.2774 55.2769C43.443 55.0513 43.672 54.7644 43.9022 54.4764C44.2015 54.1034 44.5043 53.7247 45.2107 52.6509L45.3604 52.4219L48.6894 49.3015L53.7351 46.5292L58.435 45.1515L59.6845 45.1379C57.0097 44.3941 54.6161 42.9904 52.6999 41.1195C49.7598 38.2497 47.941 34.2879 47.941 29.9146C47.941 25.5413 49.7598 21.5784 52.6987 18.7109C55.6218 15.858 59.6516 14.0938 64.0964 14.0938C68.5411 14.0938 72.5709 15.858 75.494 18.7109C78.433 21.5784 80.2506 25.5413 80.2506 29.9146C80.2506 34.2879 78.433 38.2497 75.4929 41.1195C73.3317 43.2307 70.5605 44.7456 67.4662 45.3908L68.6228 45.4724C69.1852 45.5393 69.675 45.5495 70.1626 45.5608C71.4846 45.5892 72.8101 45.6187 74.4509 46.2083C75.3398 46.4555 76.0235 46.6868 76.6891 47.0122C77.4238 47.3716 78.0554 47.8002 78.7913 48.4227C79.6746 49.2198 80.6089 50.0997 81.4513 50.9376C81.6577 51.1678 81.8935 51.3855 82.1283 51.6009C82.7632 52.186 83.4005 52.7722 84.0093 53.804L86.3825 56.98L86.5515 57.1909C87.5901 58.4393 88.2659 59.2579 88.4394 61.2796L88.8464 64.4182L89.0732 68.4967L84.7225 68.7359L84.498 64.7153L84.0887 61.6379C84.032 60.9837 83.7009 60.5823 83.1941 59.9689C83.1941 59.9473 82.9356 59.648 82.8846 59.5913L80.4365 56.3144L80.3277 56.1194C80.0476 55.6114 79.6111 55.21 79.1757 54.8098C78.8695 54.5275 78.5611 54.2429 78.2493 53.9016L75.943 51.7211C75.4872 51.3402 75.1346 51.0941 74.7785 50.9195C74.3749 50.7233 73.8805 50.5623 73.1877 50.373L73.0176 50.3219C72.0085 49.9534 71.0424 49.9319 70.0775 49.9115C69.4165 49.8967 68.7532 49.882 68.1193 49.8083L63.0782 49.4534L59.0881 49.4954L55.4518 50.5612L51.2587 52.8652L48.6917 55.2713C47.9989 56.3133 47.6462 56.7544 47.2981 57.1898C47.187 57.3281 47.0748 57.4676 46.7992 57.844L46.4908 58.2726C45.9364 59.0368 45.8513 59.1525 45.459 60.2716L44.1959 64.0519L43.0745 68.9616L40.5425 68.3912H38.0412V62.6777C37.912 61.8205 37.7827 61.0393 37.6217 60.3691C37.4482 59.648 37.2203 58.9405 36.8847 58.2057L36.8337 58.1037C36.5956 57.5016 36.354 57.0469 36.0502 56.6557C35.7361 56.2521 35.3268 55.8643 34.7678 55.413C33.9559 54.8665 33.2302 54.3971 32.4989 53.9945C31.7857 53.6022 31.0305 53.2485 30.1223 52.9094C29.2742 52.6997 28.5394 52.5851 27.8047 52.5262C26.9452 52.4581 26.1288 52.4547 25.1843 52.4672H25.1242C24.1003 52.4479 23.0776 52.5568 22.0639 52.7382V52.7473C20.9584 52.9446 19.9436 53.1986 18.9685 53.465C18.3448 53.702 17.7552 54.083 17.1849 54.5445C16.5261 55.0751 15.8764 55.735 15.221 56.421L15.1451 56.4981C14.5452 57.0707 13.95 57.6683 13.4545 58.293C13.0213 58.8327 12.6676 59.3974 12.4635 59.9825L12.4465 60.0335C12.0995 60.9678 12.1573 62.1176 12.2185 63.3376C12.2356 63.7004 12.2548 64.0667 12.2662 64.5826L7.91552 64.6676C7.90872 64.383 7.88718 63.9567 7.86677 63.5428C7.78399 61.8749 7.70462 60.3011 8.36793 58.5141C8.75345 57.429 9.34646 56.4664 10.0415 55.5888V55.5808C10.6708 54.786 11.3863 54.0637 12.1006 53.3788C12.849 52.5953 13.6064 51.8334 14.4545 51.1485C15.3798 50.4002 16.3923 49.7686 17.5715 49.3434L17.7337 49.2924C18.4231 49.103 19.1125 48.9205 19.7905 48.7617C18.3777 48.1279 17.101 47.2537 16.0136 46.1924C13.6438 43.8793 12.1777 40.6863 12.1777 37.1623C12.1777 33.6382 13.645 30.4441 16.0136 28.131C18.3652 25.8349 21.6104 24.4131 25.1843 24.4131ZM31.3185 31.2526C29.7549 29.7264 27.587 28.7819 25.1843 28.7819C22.7839 28.7819 20.6148 29.7275 19.0512 31.2537C17.5046 32.7629 16.5465 34.8537 16.5465 37.1623C16.5465 39.4708 17.5035 41.5605 19.0501 43.0697C20.6137 44.597 22.7839 45.5416 25.1843 45.5416C27.587 45.5416 29.7561 44.597 31.3197 43.0709C32.8663 41.5605 33.8233 39.472 33.8233 37.1623C33.8233 34.8526 32.8663 32.7629 31.3185 31.2526ZM72.4564 21.8324C70.3224 19.7506 67.3676 18.4625 64.0964 18.4625C60.8252 18.4625 57.8692 19.7506 55.7364 21.8324C53.6194 23.8983 52.3098 26.7568 52.3098 29.9146C52.3098 33.0724 53.6206 35.9309 55.7364 37.9968C57.8692 40.0797 60.8252 41.3689 64.0964 41.3689C67.3676 41.3689 70.3224 40.0797 72.4564 37.9968C74.5722 35.9309 75.8829 33.0724 75.8829 29.9146C75.8829 26.7568 74.5733 23.8983 72.4564 21.8324Z"
            fill="#9C96A9"
          />
        </svg>
      </div>
    </div>
    <div class="card">
      <div>
        <div class="numbers">115</div>
        <div class="cardName">Заказов за все время</div>
      </div>
      <div class="iconBx">
        <svg
          width="97"
          height="97"
          viewBox="0 0 97 97"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M38.767 67.2829C37.4415 67.2887 36.3623 66.2174 36.3565 64.8919C36.3519 63.5652 37.4232 62.486 38.7487 62.4814L80.755 62.211C82.0805 62.2064 83.1598 63.2765 83.1644 64.6032C83.1701 65.9287 82.0989 67.008 80.7733 67.0126L38.767 67.2829ZM13.5655 65.6228C12.6089 64.7029 12.5791 63.1803 13.4991 62.2236C14.4191 61.267 15.9417 61.2383 16.8983 62.1583C17.9672 63.1883 18.8173 64.1163 19.4898 64.8507C20.0661 65.4808 19.1381 66.0868 19.7419 65.9368C19.7854 65.9265 20.5026 65.1737 21.8935 63.7153C23.0334 62.5192 24.54 60.9393 26.6354 58.9137C27.5921 57.9926 29.1135 58.0224 30.0347 58.9791C30.9547 59.9357 30.9249 61.4583 29.9682 62.3783C27.9724 64.3087 26.4945 65.8577 25.3775 67.0297C23.3473 69.1596 22.2991 70.2571 20.891 70.6077C18.7417 71.1416 17.8298 70.1448 15.9497 68.0895C15.3666 67.4525 14.6287 66.6471 13.5655 65.6228ZM38.767 50.202C37.4415 50.2066 36.3623 49.1365 36.3565 47.8098C36.3519 46.4843 37.4232 45.4051 38.7487 45.3993L80.755 45.129C82.0805 45.1244 83.1598 46.1956 83.1644 47.5211C83.1701 48.8467 82.0989 49.9259 80.7733 49.9316L38.767 50.202ZM13.5655 48.5408C12.6089 47.6208 12.5791 46.0993 13.4991 45.1427C14.4191 44.1861 15.9417 44.1563 16.8983 45.0763C17.887 46.0283 18.7096 46.9162 19.3696 47.6288C19.9985 48.3082 19.1908 48.9154 19.7476 48.7768C19.8358 48.755 20.6023 47.9588 22.0917 46.411C23.2133 45.2458 24.6683 43.7335 26.6354 41.8317C27.5921 40.9117 29.1135 40.9415 30.0347 41.8981C30.9547 42.8536 30.9249 44.3762 29.9682 45.2962C28.0733 47.1293 26.6515 48.6061 25.5574 49.7437C23.431 51.9526 22.3346 53.0903 20.8967 53.4477C18.7211 53.9873 17.7805 52.9734 15.8477 50.886C15.2852 50.2788 14.5841 49.5215 13.5655 48.5408ZM38.767 32.4085C37.4415 32.4131 36.3623 31.343 36.3565 30.0163C36.3519 28.6908 37.4232 27.6115 38.7487 27.6058L80.755 27.3354C82.0805 27.3308 83.1598 28.402 83.1644 29.7276C83.1701 31.0531 82.0989 32.1324 80.7733 32.1381L38.767 32.4085ZM13.5655 30.7484C12.6089 29.8273 12.5791 28.3058 13.4991 27.3492C14.4191 26.3925 15.9417 26.3627 16.8983 27.2827C17.7083 28.0629 18.3614 28.7354 18.9136 29.3037C19.8038 30.2202 19.436 30.8572 19.8336 30.7587C20.0295 30.7106 20.8956 29.8215 22.5603 28.1168C23.612 27.0387 24.9284 25.6891 26.6354 24.0382C27.5921 23.1182 29.1135 23.148 30.0347 24.1046C30.9547 25.0612 30.9249 26.5827 29.9682 27.5027C28.323 29.0952 27.0353 30.415 26.0065 31.469C23.7094 33.8223 22.5121 35.0481 20.9827 35.4285C18.7096 35.9922 17.6591 34.9106 15.4674 32.656C14.9392 32.1129 14.3148 31.469 13.5655 30.7484Z"
            fill="#9C96A9"
          />
        </svg>
      </div>
    </div>
    <div class="card">
      <div>
        <a
          href="https://time.is/Moscow"
          id="time_is_link"
          rel="nofollow"
          style="font-size: 36px"
        ></a>
        <div id="Moscow_z71d" class="numbers"></div>
        <div class="cardName">Время сейчас в МСК</div>
      </div>
      <div class="iconBx">
        <svg
          width="78"
          height="78"
          viewBox="0 0 78 78"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M29.2422 6.34766C25.6509 6.34766 22.7422 9.25771 22.7422 12.8477L22.7455 13.2799C17.1717 14.7457 12.9922 19.814 12.9922 25.8477V51.8476C12.9922 57.8813 17.2172 62.9737 22.7909 64.4391L22.7422 64.8476C22.7422 68.4376 25.6509 71.3476 29.2422 71.3476H48.7422C52.3334 71.3476 55.2422 68.4376 55.2422 64.8476C55.2422 64.7716 55.2747 64.6406 55.2747 64.4485C60.8484 62.9825 64.9922 57.8813 64.9922 51.8476V48.5976C66.7862 48.5976 68.2422 47.1426 68.2422 45.3476V32.3477C68.2422 30.5527 66.7862 29.0977 64.9922 29.0977V25.8477C64.9922 19.814 60.8549 14.7684 55.2844 13.3027C55.2844 13.1103 55.2422 12.9237 55.2422 12.8477C55.2422 9.25771 52.3334 6.34766 48.7422 6.34766H29.2422ZM25.9922 19.3477H51.9922C55.5834 19.3477 58.4922 22.2577 58.4922 25.8477V51.8476C58.4922 55.4376 55.5834 58.3476 51.9922 58.3476H25.9922C22.4009 58.3476 19.4922 55.4376 19.4922 51.8476V25.8477C19.4922 22.2577 22.4009 19.3477 25.9922 19.3477ZM38.9922 25.8477C37.1982 25.8477 35.7422 27.3027 35.7422 29.0977V35.5977H29.2422C27.4482 35.5977 25.9922 37.0527 25.9922 38.8477C25.9922 40.6426 27.4482 42.0977 29.2422 42.0977H38.9922C40.7862 42.0977 42.2422 40.6426 42.2422 38.8477V29.0977C42.2422 27.3027 40.7862 25.8477 38.9922 25.8477Z"
            fill="#9C96A9"
          />
        </svg>
      </div>
    </div>
  </div>

  <!--Bot-->
  <div class="details">
    <div class="recentOrders">
      <div class="cardHeader">
        <h2>Список заказов</h2>
        <a href="#" class="all-views">Посмотреть все</a>
      </div>
      <table>
        <thead>
          <tr>
            <td>Название</td>
            <td>Количество</td>
            <td>Стоимость</td>
            <td>Статус</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
          <tr>
            <td>Заказ №32</td>
            <td>1</td>
            <td>330</td>
            <td>В обработке</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--right-->
    <div class="recentCustomers">
      <div class="cardHeader">
        <h2>Список пользователей</h2>
      </div>
      <table>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
        <tr>
          <td width="60px">
            <div class="imgBx">
              <img src="img/test.jpg" alt="No Ethernet" />
            </div>
          </td>
          <td>
            <h4>
              Юрий Тишков<br />
              <span>yuriitish@mail.ru</span>
            </h4>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      products: [],
    };
  },
  mounted() {
    let toggle = document.querySelector(".toggle");
    let navigationCart = document.querySelector(".navigation-cart");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
      navigationCart.classList.toggle("active");
      main.classList.toggle("active");
    };

    //
    let list = document.querySelectorAll(
      ".navigation-cart li:not(:first-child)"
    );
    function activeLink() {
      list.forEach((item) => item.classList.remove("hovered"));
      this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("click", activeLink));
    time_is_widget.init({ Moscow_z71d: {} });

    this.allProducts();
  },
  methods: {
    allProducts() {
      axios.get(`/api/all/products`).then((res) => {
        this.products = res.data.content;
      });
    },
  },
};
</script>

<style lang="css" scoped>
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background-color: white;
  transition: 500ms;
}

.main.active {
  width: calc(100% - 80px);
  left: 80px;
}

.topbar {
  width: 100%;
  height: 60px;
  padding: 0 10px;
}

.toggle {
  position: relative;
  top: 10px;
  width: 50px;
  cursor: pointer;
}
.cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
}

.cardBox .card {
  position: relative;
  background-color: white;
  padding: 20px 20px 0 20px;
  height: 95%;
  border-radius: 20px;
  display: flex;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}

.cardBox .card:hover {
  background-color: #ece4fe;
}

.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName {
  color: black;
}

.cardBox .card:hover .iconBx svg path {
  fill: #6a4ba7;
}

.cardBox .card:first-child > .iconBx svg {
  margin-top: -20px;
}

.cardBox .card .numbers {
  position: relative;
  font-weight: bold;
  font-size: 48px;
  color: #6a4ba7;
}

.cardBox .card .cardName {
  color: #9c96a9;
  font-size: 17px;
  margin-top: 5px;
}

.h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  transform: translate(40%);
  margin-bottom: 30px;
}

.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-gap: 30px;
  margin-top: 10px;
}

.details .recentOrders {
  position: relative;
  display: grid;
  min-height: 500px;
  background-color: white;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.cardHeader h2 {
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
}

.all-views {
  position: relative;
  padding: 11px 34px;
  background: #7356ac;
  border-radius: 14px;
  color: white;
}

.details table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

.details table thead td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
}

.details table tbody td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
}

.details .recentOrders table tr {
  color: black;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.details .recentOrders table tr:last-child {
  border-bottom: none;
}

.details .recentOrders table td {
  padding: 19px 19px 19px 0;
}

.details .recentOrders table td:nth-child(2),
.details .recentOrders table td:nth-child(3) {
  text-align: center;
}

.details .recentOrders table td:last-child {
  text-align-last: right;
}

.recentCustomers {
  position: relative;
  min-height: 500px;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
  background: white;
}

.recentCustomers .imgBx {
  position: relative;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
}

.recentCustomers .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.recentCustomers table tr td {
  padding: 12px 10px;
}

.recentCustomers table tr td h4 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 22px;
}

.recentCustomers table tr td h4 span {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  color: #9c96a9;
  line-height: 16px;
}

/* adaptive */

@media (max-width: 1590px) {
  .navigation-cart {
    left: -80px;
  }

  .navigation-cart.active {
    width: 80px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 80px);
    left: 80px;
  }

  .cardBox {
    grid-gap: 10px;
  }

  .cardBox .card .cardName {
    font-size: 15px;
  }
}

@media (max-width: 1200px) {
  .navigation-cart {
    left: -300px;
  }

  .navigation-cart.active {
    width: 300px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 300px);
    left: 0;
  }

  .cardBox {
    grid-template-columns: repeat(2, 1fr);
  }

  .details .recentOrders table td {
    padding-right: 5px;
  }

  .details table tbody td {
    font-size: 16px;
  }
}

@media (max-width: 928px) {
  .details {
    grid-template-columns: repeat(1, 1fr);
    width: 100%;
    padding: 10px;
  }

  .h1 {
    width: 100%;
    transform: none;
    text-align: center;
  }
  .recentOrders {
    overflow-x: auto;
  }

  .navigation-cart {
    width: 100%;
    left: -100%;
    z-index: 1000;
  }

  .navigation-cart.active {
    width: 100vw;
    left: 0;
  }

  .toggle {
    z-index: 10001;
  }

  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }
}

@media (max-width: 610px) {
  .cardBox {
    grid-template-columns: repeat(1, 1fr);
  }

  .card:last-child {
    padding-bottom: 20px;
  }

  .details table thead td {
    font-size: 11px;
  }

  .details .recentOrders table td {
    font-size: 11px;
  }

  .details .recentOrders table td:last-child {
    font-size: 10px;
  }
  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }

  .cardHeader h2 {
    font-size: 16px;
  }

  .all-views {
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 10px;
  }

  .recentCustomers table tr td h4 {
    font-size: 14px;
  }

  .recentCustomers table tr td h4 span {
    font-size: 12px;
  }

  .navigation-cart ul li {
    width: 50%;
  }
}
</style>
