import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const IntroductionTextsApplySchool = ({ slug }) => {
  const [introductionTexts, setIntroductionTexts] = useState([]);
  useEffect(() => {
    apiService
      .getPageBySlug(slug)
      .then((response) => {
        setIntroductionTexts(response.data);
      })
      .catch((error) => {
        console.log('Erro ao captar os dados no component introduction-texts-apply-school:', error);
      });
  }, [slug]);
  return (
    <>
      {introductionTexts[0]?.acf?.['introduction-texts'] && (
        <section className="introduction-texts-apply-school">
           {introductionTexts.map((item, index) => (
            <div key={`introduction-texts-apply-school-${index}`}>
              <div
                dangerouslySetInnerHTML={{
                  __html: item?.acf?.["introduction-texts"],
                }}
              />
              <ul>
                {item?.acf?.lists?.length > 0 &&
                  item?.acf?.lists.map((listItem, index) => (
                    <li
                      key={`introduction-texts-apply-school-list-item-${index}`}
                    >
                      {listItem.content}
                    </li>
                  ))}
              </ul>

              <div
                dangerouslySetInnerHTML={{
                  __html: item?.acf?.["collumn-1"],
                }}
              />
              <div
                dangerouslySetInnerHTML={{
                  __html: item?.acf?.["collumn-2"],
                }}
              />
            </div>
          ))} 
        </section> 
      )}
    </>
  );
};

export default IntroductionTextsApplySchool;
