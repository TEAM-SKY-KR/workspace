﻿using System;
using System.Collections;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Capstone_Landmark
{
    public partial class Form1 : Form
    {
        //이미지 분류 전역변수
        public static ArrayList image_url = new ArrayList();
        //관광지 타이틀 전역변수
        public static ArrayList landmark_title = new ArrayList();
        //관광지 설명 전역변수
        public static ArrayList landmark_explain = new ArrayList();
        //관광지 전화번호 전역변수
        public static ArrayList landmark_phone = new ArrayList();
        //관광지 주소 전역변수
        public static ArrayList landmark_address = new ArrayList();

        //======================================================================================================================//
        //이미지 분류 전역변수
        public static ArrayList image_url2 = new ArrayList();
        //관광지 타이틀 전역변수
        public static ArrayList landmark_title2 = new ArrayList();
        //관광지 설명 전역변수
        public static ArrayList landmark_explain2 = new ArrayList();
        //관광지 전화번호 전역변수
        public static ArrayList landmark_phone2 = new ArrayList();
        //관광지 주소 전역변수
        public static ArrayList landmark_address2 = new ArrayList();




        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //12번 14번 오류
            int count = 0;
            for (int i = 15; i <= 25; i++)
            {

                //httprequest 받아오기
                string url = "https://tour.daegu.go.kr/index.do?menu_id=00002943";
                string temp = HttpRequest.Result_Post(url, i);


                //이미지분류
                Regex reg = new Regex(@"<imgsrc=""/icms/tour(.+)""alt=");
                MatchCollection resultColl = reg.Matches(temp.Replace(" ", String.Empty));



                foreach (Match mm in resultColl)
                {
                    image_url.Add("https://tour.daegu.go.kr/icms/tour" + mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(mm.Groups[1].ToString().Trim());
                }

                //관광지분류
                reg = new Regex(@"class=""sub_box_title_nav"">(.+)</a>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    landmark_title.Add(mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(landmark_title.Count+"번"+mm.Groups[1].ToString().Trim());
                }



                //관광지 설명
                reg = new Regex(@"<p class=""black_line_ct"">(.+)</p>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    landmark_explain.Add(mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(mm.Groups[1].ToString().Trim());

                }




                //관광지 전화번호
                reg = new Regex(@"<span class=""adress1"">(.+)</span>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    if (mm.Groups[1].ToString() == null)
                    {
                        landmark_phone.Add("번호없음");
                    }
                    else
                    {
                        landmark_phone.Add(mm.Groups[1].ToString().Trim());
                    }

                    Console.WriteLine(landmark_phone.Count + "번" + mm.Groups[1].ToString().Trim());
                }


                //관광지 주소
                reg = new Regex(@"<span class=""adress"">(.+)</span>");
                resultColl = reg.Matches(temp.Replace("\r", string.Empty));



                foreach (Match mm in resultColl)
                {
                    if (!mm.Groups[1].ToString().Trim().Contains("<a href="))
                    {
                        landmark_address.Add(mm.Groups[1].ToString().Trim());
                        //Console.WriteLine(mm.Groups[1].ToString().Trim());
                    }
                }


            }



            for (int j = 0; j < landmark_phone.Count; j++)
            {
                using (StreamWriter outputFile = new StreamWriter(@"save.txt", true))
                {
                    outputFile.WriteLine(landmark_phone.Count + "번|" + landmark_title[j].ToString() + "|" + landmark_explain[j].ToString() + "|" + landmark_address[j].ToString() + "|" + landmark_phone[j].ToString() + "|" + image_url[j].ToString() + "|");
                }


            }


        }


        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {


        }

        private void button3_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click_1(object sender, EventArgs e)
        {






        }

        private void button2_Click_2(object sender, EventArgs e)
        {
            string path = @"save.txt";

            // text file 의 내용을 한줄 씩 읽어와 string 배열에 대입 합니다.
            string[] textValue = System.IO.File.ReadAllLines(path);

            if (textValue.Length > 0)
            {
                for (int i = 0; i < textValue.Length; i++)
                {
                    //textValue.Length
                    Console.WriteLine(textValue[i]);
                    string[] splitCharacter = textValue[i].Split('|');
                    landmark_title2.Add(splitCharacter[1]);
                    landmark_explain2.Add(splitCharacter[2]);
                    landmark_address2.Add(splitCharacter[3]);
                    landmark_phone2.Add(splitCharacter[4]);
                    image_url2.Add(splitCharacter[5]);
                }
            }


           
        }

        private void button3_Click_1(object sender, EventArgs e)
        {
            for (int i = 0; i <= 205; i++)
            {
                using (WebClient client = new WebClient())
                {
                    client.DownloadFile(new Uri(image_url2[i].ToString()), "img\\" + (i+1) + ".png");
                }
            }

        }
    }
}
